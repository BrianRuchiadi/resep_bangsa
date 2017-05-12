<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\LuasDaerahPrint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LuasDaerahPrintController extends Controller
{

	public function index()
	{	
		$no = 1;
		$luasDaerahPrint = LuasDaerahPrint::all();

		return view('admin.pages.luas-daerah-print.all' , [
															'luasDaerahPrint' => $luasDaerahPrint,
															'no' => $no,
														  ]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|max:20',
			'kategori' => 'required|max:20',
			'panjang' => 'required' ,
			'lebar' => 'required',
		]);

		LuasDaerahPrint::create([
			'nama' => $request->get('nama'),
			'kategori' => $request->get('kategori'),
			'panjang' => $request->get('panjang'),
			'lebar' => $request->get('lebar'),
		]);

		return redirect('/admin/luas-daerah-print');
	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|max:20',
			'kategori' => 'required|max:20',
			'panjang' => 'required',
			'lebar' => 'required',
		]);
		
		LuasDaerahPrint::where('id', $request->get('id'))->
			 			 update([
					   			'nama' => $request->get('nama'),
					   			'kategori' => $request->get('kategori'),
					   			'panjang' => $request->get('panjang'),
					   			'lebar' => $request->get('lebar'),
		]);

		return redirect('/admin/luas-daerah-print');
	}


	public function showCreateLuasDaerahPrint()
	{
		return view('admin.pages.luas-daerah-print.create');
	}

	public function showEditLuasDaerahPrint(Request $request)
	{
		$id = $request->get('id', 0);
		
		$luasDaerahPrint = LuasDaerahPrint::findOrFail($id);

		return view('admin.pages.luas-daerah-print.edit', ['luasDaerahPrint' => $luasDaerahPrint]);
		
	}


}