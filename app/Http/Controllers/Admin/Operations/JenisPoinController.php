<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\JenisPoin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JenisPoinController extends Controller
{
	public function index()
	{
		$no = 1;
		$jenisPoin = JenisPoin::all();

		return view('admin.pages.jenis-poin.all' , [
													'jenisPoin' => $jenisPoin,
													'no' => $no,
													]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|unique:jenis_poin|min:4|max:20',
			'kategori' => 'required',
		]);

		JenisPoin::create([
			'nama' => $request->get('nama'),
			'kategori' => $request->get('kategori'),
		]);

		return redirect('/admin/jenis-poin');

	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|min:4|max:20|unique:jenis_poin,nama,' . $request->get('id'), 
			'kategori' => 'required',
		]);

		JenisPoin::where('id', $request->get('id'))->
					   update([
					   			'nama' => $request->get('nama'),
					   			'kategori' => $request->get('kategori'),
					   ]);

		return redirect('/admin/jenis-poin');
	}

	public function showCreateJenisPoin()
	{
		return view('admin.pages.jenis-poin.create');
	}

	public function showEditJenisPoin(Request $request)
	{
		$id = $request->get('id', 0);
		
		$jenisPoin = JenisPoin::findOrFail($id);

		return view('admin.pages.jenis-poin.edit', ['jenisPoin' => $jenisPoin]);
		
	}

}