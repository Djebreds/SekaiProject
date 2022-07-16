<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('authentication.login');
    }
}
