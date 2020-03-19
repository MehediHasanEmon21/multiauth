<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{	
	use AuthenticatesUsers;

	 protected $redirectTo = RouteServiceProvider::ADMIN_HOME;

    public function showAdminLoginForm(){

    	return view('admin.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
