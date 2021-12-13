<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        if(Auth::check())
        return view('site.register');
    }
    public function store(){

    }
}
