<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
   use SendsPasswordResetEmails;

    public function showAdminLinkRequestForm()
    {
        return view('admin.auth.forgot');
    }

    public function broker()
    {
        return Password::broker('admins');
    }
}
