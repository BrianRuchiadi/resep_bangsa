<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SizeController extends Controller
{

	public function index()
	{	
		$no = 1;
		$size = Size::all();

		return view('admin.pages.size.all' , [
												'size' => $size,
												'no' => $no,
											]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|min:4|max:20',
			'kategori' => 'required|min:4|max:20',
			'panjang' => 'required' ,
			'lebar' => 'required',
		]);

		Size::create([
			'nama' => $request->get('nama'),
			'kategori' => $request->get('kategori'),
			'panjang' => $request->get('panjang'),
			'lebar' => $request->get('lebar'),
		]);

		return redirect('/admin/size');
	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|min:4|max:20',
			'kategori' => 'required|min:4|max:20',
			'panjang' => 'required',
			'lebar' => 'required',
		]);
		
		Size::where('id', $request->get('id'))->
			  update([
					   	'nama' => $request->get('nama'),
					   	'kategori' => $request->get('kategori'),
					   	'panjang' => $request->get('panjang'),
					   	'lebar' => $request->get('lebar'),
		]);

		return redirect('/admin/size');
	}


	public function showCreateSize()
	{
		return view('admin.pages.size.create');
	}

	public function showEditSize(Request $request)
	{
		$id = $request->get('id', 0);
		
		$size = Size::findOrFail($id);

		return view('admin.pages.size.edit', ['size' => $size]);
		
	}


}