<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\Designer;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
	public function __construct()
	{	
		$this->no = 1;
		$this->designer = Designer::all();
		$this->users = User::all();
		$this->is_designer = false;
	}

	public function index()
	{	
		return view('admin.pages.users.users-index', [
												'no' => $this->no,
												'users' => $this->users,
												]);
	}

	public function designersIndex()
	{
		return view('admin.pages.users.designer-index', [
												'no' => $this->no,
												'designer' => $this->designer
												]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:255|unique:users',
			'email'	=> 'required|email|max:255|unique:users',
			'password' => 'required|min:6|confirmed',
			'alamat' => 'required|min:6',
		]);

		if($request->input('designer') == 0)
		{
			User::create([
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'password' => bcrypt($request->input('password')),
				'alamat' => $request->input('alamat'),
				'user_type' => 'basic'
			]);

			return redirect('/admin/users');
		}
		
		$user = User::create([
					'name' => $request->input('name'),
					'email' => $request->input('email'),
					'password' => bcrypt($request->input('password')),
					'alamat' => $request->input('alamat'),
					'user_type' => 'designer'
				]);

		Designer::create([
				'users' => $user->id,
				'poin' => 0,
				'jenis_kelamin' => $request->input('jenis_kelamin'),
				'tanggal_lahir' => $request->input('tanggal_lahir'),
				'popularitas' => 0
		]);

		return redirect('/admin/users');

	}

	public function edit(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:255|unique:users,name,' . $request->get('id'),
			'email'	=> 'required|email|max:255|unique:users,email,' . $request->get('id'),
			'alamat' => 'required|min:6',
		]);

		$user = User::where('id', $request->get('id'))->first();
		$user->name = $request->get('name');
		$user->alamat = $request->get('alamat');
		$user->save();

		if($request->get('designer') == 1)
		{
			$designer = Designer::where('users', $request->get('id'))->first();

			$designer->jenis_kelamin = $request->get('jenis_kelamin');
			$designer->tanggal_lahir = $request->get('tanggal_lahir');
			$designer->save();
		}

		return redirect('admin/users');
	}

	public function showCreateUserForm()
	{
		return view('admin.pages.users.create');
	}

	public function showEditUserForm(Request $request)
	{
		$user = User::findOrFail($request->get('id'));

		if($user->user_type == "designer")
		{
			$this->is_designer = true;
			$designer = Designer::where('users', $request->get('id'))->first();

			return view('admin.pages.users.edit', [
													'user' => $user,
													'is_designer' => $this->is_designer,
													'designer' => $designer
												]);
		}

		return view('admin.pages.users.edit', [
												'user' => $user,
												'is_designer' => $this->is_designer,
											]);
	}
}