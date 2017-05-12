<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\JenisPakaian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JenisPakaianController extends Controller
{
	public function index()
	{
		$no = 1;
		$jenisPakaian = JenisPakaian::all();

		return view('admin.pages.jenis-pakaian.all' , [
														'jenisPakaian' => $jenisPakaian,
														'no' => $no,
													  ]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|unique:jenis_pakaian|min:4|max:20',
			'keterangan' => 'required|min:5',
		]);

		JenisPakaian::create([
			'nama' => $request->get('nama'),
			'keterangan' => $request->get('keterangan'),
		]);

		return redirect('/admin/jenis-pakaian');
	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|min:4|max:20|unique:jenis_pakaian,nama,' . $request->get('id'), 
			'keterangan' => 'required|',
		]);

		JenisPakaian::where('id', $request->get('id'))->
					   update([
					   			'nama' => $request->get('nama'),
					   			'keterangan' => $request->get('keterangan'),
					   ]);

		return redirect('/admin/jenis-pakaian');
	}

	public function showCreateJenisPakaian()
	{
		return view('admin.pages.jenis-pakaian.create');
	}

	public function showEditJenisPakaian(Request $request)
	{
		$id = $request->get('id', 0);
		
		$jenisPakaian = JenisPakaian::findOrFail($id);

		return view('admin.pages.jenis-pakaian.edit', ['jenisPakaian' => $jenisPakaian]);
		
	}
}