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

		$userReport = UserReport::create([
			'report_type_id' => $request->input('kategori_laporan'),
			'reported_by' => $request->input('email'),
			'description' => $request->input('deskripsi_laporan'),
			'is_read' => 0
		]);

		$logInsert = LogInsert::create([
			'user_type' => 'user',
			'user_id' => $userId,
			'user_email' => $request->input('email'),
			'table_name' => 't0401_ingredient',
			'table_id' => $ingredient->id
		]);
		dd($request->all());	

		$request->session()->flash('ingredient-report-success', 'Laporan Anda berhasil ditambahkan');
		return redirect()->route('bahan-makanan');
	}
}