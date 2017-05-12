<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\OtoritasAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OtoritasAdminController extends Controller
{

	public function index()
	{	
		$no = 1;
		$otoritasAdmin = OtoritasAdmin::all();

		return view('admin.pages.otoritas-admin.all' , [
														'otoritasAdmin' => $otoritasAdmin,
														'no' => $no,
														]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|unique:otoritas_admin|min:4|max:20',
			'keterangan' => 'required|min:5',
		]);

		OtoritasAdmin::create([
			'nama' => $request->get('nama'),
			'keterangan' => $request->get('keterangan'),
		]);

		return redirect('/admin/otoritas-admin');

	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'nama' => 'required|min:4|max:20|unique:otoritas_admin,nama,' . $request->get('id'), 
			'keterangan' => 'required|min:5',
		]);

		OtoritasAdmin::where('id', $request->get('id'))->
					   update([
					   			'nama' => $request->get('nama'),
					   			'keterangan' => $request->get('keterangan'),
					   ]);

		return redirect('/admin/otoritas-admin');
	}

	public function showCreateOtoritasAdmin()
	{
		return view('admin.pages.otoritas-admin.create');
	}

	public function showEditOtoritasAdmin(Request $request)
	{
		$id = $request->get('id', 0);
		
		$otoritasAdmin = OtoritasAdmin::findOrFail($id);

		return view('admin.pages.otoritas-admin.edit', ['otoritasAdmin' => $otoritasAdmin]);
		
	}

}