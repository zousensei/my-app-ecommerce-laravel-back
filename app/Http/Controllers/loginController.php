<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){ 

        return view('auth.login');
    }

    public function forgotPassword(){ 

        return view('auth.forgotPassword');
    }

    public function forgotPasswordOTP(){ 

        return view('auth.forgotPasswordOTP');
    }
}
