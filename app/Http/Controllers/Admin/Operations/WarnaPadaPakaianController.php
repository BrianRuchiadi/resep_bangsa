<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\WarnaPadaPakaian;
use App\Models\WarnaPakaian;
use App\Models\VariasiPakaian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WarnaPadaPakaianController extends Controller
{
	public function __construct()
	{
		$this->warnaPakaian = WarnaPakaian::all();
		$this->variasiPakaian = VariasiPakaian::all();
	}

	public function index()
	{
		$no = 1;
		$warnaPadaPakaian = WarnaPadaPakaian::all();

		return view('admin.pages.warna-pada-pakaian.all' , [
														'warnaPadaPakaian' => $warnaPadaPakaian,
														'no' => $no,
													  ]);
	}

	public function showCreateWarnaPadaPakaian()
	{
		return view('admin.pages.warna-pada-pakaian.create', [
															'warnaPakaian' => $this->warnaPakaian,
															'variasiPakaian' => $this->variasiPakaian
															]);
	}
}