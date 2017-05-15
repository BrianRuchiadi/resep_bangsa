<?php

namespace App\Http\Controllers\User;

use App\Models\UserReport;
use App\Models\LogInsert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Auth;

class ReportController extends Controller
{
	public function submitIngredientReport(Request $request)
	{
		$this->validate($request,[
			'kategori_laporan' => 'bail|required',
			'deskripsi_laporan' => 'bail',
			'email' => 'bail|required|email',
		], [
			'kategori_laporan.required' => 'kategori laporan dibutuhkan',
			'email.required' => 'email dibutuhkan',
			'email.email' => 'format email tidak memadai' 
		]);

		$userId = (Auth::user()) ? Auth::user()->id : null;
		$userEmail = (Auth::user()) ? Auth::user()->email : $request->input('email');
 
		$userReport = UserReport::create([
			'report_type_id' => $request->input('kategori_laporan'),
			'reported_by' => $request->input('email'),
			'description' => $request->input('deskripsi_laporan'),
			'is_read' => 0
		]);

		$logInsert = LogInsert::create([
			'user_type' => 'user',
			'user_id' => $userId,
			'user_email' => $userEmail,
			'table_name' => 't0401_ingredient',
			'table_id' => $userReport->id
		]);

		$request->session()->flash('ingredient-report-success', 'Laporan Anda berhasil ditambahkan');
		
		return redirect()->route('bahan-makanan');
	}
}