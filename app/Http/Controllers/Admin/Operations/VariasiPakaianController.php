<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\VariasiPakaian;
use App\Models\Size;
use App\Models\JenisPakaian;
use App\Models\BahanPrintPakaian;
use App\Models\LuasDaerahPrint;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VariasiPakaianController extends Controller
{
	// Load all necessary models
	public function __construct()
	{
		$this->size = Size::all();
		$this->jenisPakaian = JenisPakaian::all();
		$this->bahanPrintPakaian = BahanPrintPakaian::all();
		$this->luasDaerahPrint = LuasDaerahPrint::all();
	}


	public function index()
	{	
		$no = 1;
		$variasiPakaian = VariasiPakaian::all();

		return view('admin.pages.variasi-pakaian.all' , [
														'variasiPakaian' => $variasiPakaian,
														'no' => $no,
														]);
		
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'size' => 'required' ,
			'jenis_pakaian' => 'required',
			'bahan_print_pakaian' => 'required',
			'luas_daerah_print' => 'required',
		]);

		VariasiPakaian::create([
			'size' => $request->get('size'),
			'jenis_pakaian' => $request->get('jenis_pakaian'),
			'bahan_print_pakaian' => $request->get('bahan_print_pakaian'),
			'luas_daerah_print' => $request->get('luas_daerah_print'),
		]);

		return redirect('/admin/variasi-pakaian');
	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'size' => 'required' ,
			'jenis_pakaian' => 'required',
			'bahan_print_pakaian' => 'required',
			'luas_daerah_print' => 'required',
		]);

		VariasiPakaian::where('id', $request->get('id'))->
					  	update([
					   		  'size' => $request->get('size'),
					   		  'jenis_pakaian' => $request->get('jenis_pakaian'),
					   		  'bahan_print_pakaian' => $request->get('bahan_print_pakaian'),
					   		  'luas_daerah_print' => $request->get('luas_daerah_print'),
		]);

		return redirect('/admin/variasi-pakaian');
	}

	public function showCreateVariasiPakaian()
	{

		return view('admin.pages.variasi-pakaian.create', [
														  'size' => $this->size,
														  'jenisPakaian' => $this->jenisPakaian,
														  'bahanPrintPakaian' => $this->bahanPrintPakaian,
														  'luasDaerahPrint' => $this->luasDaerahPrint
														  ]);
	}

	public function showEditVariasiPakaian(Request $request)
	{
		$id = $request->get('id', 0);
		
		$variasiPakaian = VariasiPakaian::findOrFail($id);

		return view('admin.pages.variasi-pakaian.edit', [
														 'variasiPakaian' => $variasiPakaian,
														 'size' => $this->size,
														 'jenisPakaian' => $this->jenisPakaian,
														 'bahanPrintPakaian' => $this->bahanPrintPakaian,
														 'luasDaerahPrint' => $this->luasDaerahPrint
														 ]);
		
	}
}