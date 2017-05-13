<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Request;

class UserController extends Controller
{
	public function index()
	{
		return 'user index';
	}

	public function showCreateForm()
	{
		return 'user create';
	}

	public function showEditForm(User $user)
	{
		return 'user edit';
	}

	public function create(Request $request)
	{

	}
	public function edit(Request $request, User $user)
	{

	}
	public function delete(Request $request, User $user)
	{

	}
	
}