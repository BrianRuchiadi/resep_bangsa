<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\RekorPoinDesigner;
use App\Models\JenisPoin;
use App\Models\Designer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RekorPoinDesignerController extends Controller
{
	public function __construct()
	{
		$this->no = 1;
		$this->designers = Designer::all();
		$this->jenisPoin = JenisPoin::all();
	}

	public function index()
	{	
		$designers = Designer::all();

		return view('admin.pages.rekor-poin-designer.all' , [
														'designers' => $designers,
														'no' => $this->no,
														]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'poin' => 'required'
		]);

		RekorPoinDesigner::create([
									'designers' => $request->get('designers'),
									'jenis_poin' => $request->get('jenis_poin'),
									'poin' => $request->get('poin')
									]);

		$designer = Designer::where('id', $request->get('designers'))->first();
		$designer->poin = $designer->poin + $request->get('poin');
		$designer->save();

		return redirect('admin/rekor-poin-designer');
	}

	public function showCreateRekorPoinDesigner()
	{
		return view('admin.pages.rekor-poin-designer.create', [
																'designers' => $this->designers,
																'jenisPoin' => $this->jenisPoin
															]);
	}

	public function showRekorPoinDesigner(Request $request)
	{

		$rekorPoinDesigner = RekorPoinDesigner::where('designers', intval($request->get('designer-id')))->get();

		return view('admin.pages.rekor-poin-designer.show', [
															'rekorPoinDesigner' => $rekorPoinDesigner,
															'no' => $this->no
															]);
	}
}