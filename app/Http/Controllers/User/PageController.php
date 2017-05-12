<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class PageController extends Controller
{
	public function index()
	{
		return 1;
		// return view('layouts.admin.app-2');
	}

}