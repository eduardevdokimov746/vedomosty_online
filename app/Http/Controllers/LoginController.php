<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function getForm()
    {
        return view('auth/login');
    }

    public function login()
    {

    }
}
