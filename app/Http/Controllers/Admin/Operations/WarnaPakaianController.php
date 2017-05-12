<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\WarnaPakaian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WarnaPakaianController extends Controller
{
	public function index()
	{
		$no = 1;
		$warnaPakaian = WarnaPakaian::all();

		return view('admin.pages.warna-pakaian.all' , [
														'warnaPakaian' => $warnaPakaian,
														'no' => $no,
													  ]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|max:20|unique:warna_pakaian' ,
			'kode_hex' => 'required',
		]);

		WarnaPakaian::create([
			'nama' => $request->get('nama'),
			'kode_hex' => $request->get('kode_hex'),
		]);

		return redirect('/admin/warna-pakaian');
	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|max:20|unique:warna_pakaian,nama,' . $request->get('id'), 
			'kode_hex' => 'required|unique:warna_pakaian,kode_hex,' .$request->get('id'),
		]);

		WarnaPakaian::where('id', $request->get('id'))->
					  update([
					   		  'nama' => $request->get('nama'),
					   		  'kode_hex' => $request->get('kode_hex'),
		]);

		return redirect('/admin/warna-pakaian');
	}

	public function showCreateWarnaPakaian()
	{
		return view('admin.pages.warna-pakaian.create');
	}

	public function showEditWarnaPakaian(Request $request)
	{
		$id = $request->get('id', 0);
		
		$warnaPakaian = WarnaPakaian::findOrFail($id);

		return view('admin.pages.warna-pakaian.edit', ['warnaPakaian' => $warnaPakaian]);
		
	}
}