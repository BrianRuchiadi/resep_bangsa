<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\BahanPrintPakaian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BahanPrintPakaianController extends Controller
{
	public function index()
	{
		$no = 1;
		$bahanPrintPakaian = BahanPrintPakaian::all();

		return view('admin.pages.bahan-print-pakaian.all' , [
														'bahanPrintPakaian' => $bahanPrintPakaian,
														'no' => $no,
													  ]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|unique:bahan_print_pakaian|min:4|max:20',
			'keterangan' => 'required|min:5',
		]);

		BahanPrintPakaian::create([
			'nama' => $request->get('nama'),
			'keterangan' => $request->get('keterangan'),
		]);

		return redirect('/admin/bahan-print-pakaian');
	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|min:4|max:20|unique:bahan_print_pakaian,nama,' . $request->get('id'), 
			'keterangan' => 'required|min:5',
		]);

		BahanPrintPakaian::where('id', $request->get('id'))->
					   	   update([
					   			'nama' => $request->get('nama'),
					   			'keterangan' => $request->get('keterangan'),
		]);

		return redirect('/admin/bahan-print-pakaian');
	}

	public function showCreateBahanPrintPakaian()
	{
		return view('admin.pages.bahan-print-pakaian.create');
	}

	public function showEditBahanPrintPakaian(Request $request)
	{
		$id = $request->get('id', 0);
		
		$bahanPrintPakaian = BahanPrintPakaian::findOrFail($id);

		return view('admin.pages.bahan-print-pakaian.edit', ['bahanPrintPakaian' => $bahanPrintPakaian]);
		
	}
}