<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class loginController extends Controller
{
    public function login():View
    {
        return view('login');
    }
}


