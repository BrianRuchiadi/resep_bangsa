<?php

namespace App\Http\Controllers\User;

use App\Models\Inquiry;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Auth;

class InquiryController extends Controller
{
	public function submitInquiry(Request $request)
	{
		$this->validate($request,[
			'email' => 'bail|required|email',
			'nama' => 'bail|required|min:3|',
			'pesan' => 'bail|required|min:20'
		],[
			'email.required' => 'email di butuhkan untuk verifikasi',
			'email.email' => 'format email tidak valid',
			'nama.required' => 'nama di butuhkan',
			'name.min' => 'nama membutuhkan minimal 3 huruf',
			'pesan.required' => 'pesan di butuhkan',
			'pesan.min' => 'pesan membutuhkan minimal 20 huruf',
		]);

		Inquiry::create([
			'inquired_by' => $request->input('email'),
			'description' => $request->input('nama') . '_' . $request->input('pesan'),
			'is_read' => 0
		]);

		$request->session()->flash('inquiry-success', 'permintaan Anda berhasil di simpan');
		
		return redirect(url()->previous());
	}
}