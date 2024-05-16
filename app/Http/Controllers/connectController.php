<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 
use Illuminate\View\View;

class connectController extends Controller
{
    use AuthenticatesUsers;

    public function show():View
    {
        return view('etudiants.seConnecter');
    }

    public function connect(Request $request)
    {
        $apogee = $request->apogee;
        $email = $request->email;
        $password = $request->password;

        $credentials = ['apogee' => $apogee, 'email' => $email, 'password' => $password];
        if(Auth::guard('etudiant')->attempt($credentials))
        {
            $request->session()->regenerate();
            return to_route('profile');
        }else{
            return back()->withErrors([
              'email' => 'Apogee, email ou mot de passe incorrect.'
             ])->onlyInput('email');
        }
    }

    public function showEns()
    {
        return view('enseignants.seConnecterEns');
    }

    public function connectEns(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $credentials = ['email' => $email, 'password' => $password];
        if(Auth::guard('enseignant')->attempt($credentials))
        {
            $request->session()->regenerate();
            return to_route('Ensprofile');
        }else{
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect.'
            ])->onlyInput('email');
        }
    }

    public function showPar()
    {
        return view('parents.seConnecterPar');
    }

    public function connectPar(Request $request)
    {
        $email = $request->email;
        $apogee_etd = $request->apogee_etd;
        $password = $request->password;

        $credentials = ['email' => $email, 'apogee_etd' => $apogee_etd, 'password' => $password];
        if(Auth::guard('pere')->attempt($credentials)){
            $request->session()->regenerate();
            return to_route('Parprofile');
        } else{
            return back()->withErrors([
                'email' => 'Email, apogee ou mot de passe incorrect.',
            ])->onlyInput('email');
        }
    }

    public function showAdm()
    {
        return view('admins.seConnecterAdm');
    }

    public function connectAdm(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $credentials = ['email' => $email, 'password' => $password];
        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return to_route('Admprofile');
        } else {
            return back()->withErrors([
                'email' => 'Email, apogee ou mot de passe incorrect.',
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        return to_route('login');
    }
}
