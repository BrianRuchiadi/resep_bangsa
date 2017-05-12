<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\HargaDasarPakaian;
use App\Models\VariasiPakaian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;

class HargaDasarPakaianController extends Controller
{
	public function index()
	{
		$no = 1;
		$hargaDasarPakaian = collect(DB::table('harga_dasar_pakaian')->orderBy('variasi_pakaian', 'DESC')->groupBy('variasi_pakaian')->get())->sortBy('variasi_pakaian');

		return view('admin.pages.harga-dasar-pakaian.all' , [
															'hargaDasarPakaian' => $hargaDasarPakaian,
															'no' => $no,
													 		]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'variasi_pakaian' => 'required',
			'harga_dasar' => 'required|numeric',
		]);

		HargaDasarPakaian::create([
			'variasi_pakaian' => $request->get('variasi_pakaian'),
			'harga_dasar' => $request->get('harga_dasar'),
		]);

		return redirect('/admin/harga-dasar-pakaian');
	}

	public function showCreateHargaDasarPakaian()
	{
		$variasiPakaian = VariasiPakaian::all();

		return view('admin.pages.harga-dasar-pakaian.create', [
																'variasiPakaian' => $variasiPakaian,
															  ]);
	}

	public function showHargaDasarPakaian(Request $request)
	{
		$no = 1;
		$hargaDasarPakaian = HargaDasarPakaian::where('variasi_pakaian', $request->get('variasi-id', 0))->get();

		return view('admin.pages.harga-dasar-pakaian.show', [
															 'hargaDasarPakaian' => $hargaDasarPakaian,
															 'no' => $no,
															 ]);
	}

}