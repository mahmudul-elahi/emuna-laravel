<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.signin.login');
    }
    public function store()
    {
        //backend code
        return  to_route('dashboard');
    }
}
