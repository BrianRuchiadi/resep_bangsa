<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Request;

class AdminController extends Controller
{
	public function index()
	{
		return 'admin index';
	}

	public function showCreateForm()
	{
		return 'admin create';
	}

	public function showEditForm(Admin $admin)
	{
		return 'admin edit';
	}

	public function create(Request $request)
	{

	}
	public function edit(Request $request, Admin $admin)
	{

	}
	public function delete(Request $request, Admin $admin)
	{

	}
}