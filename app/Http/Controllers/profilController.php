<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profilController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
        return view('dashboardETD', compact('user'));
    }
}
