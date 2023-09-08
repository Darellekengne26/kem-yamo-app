<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\ValidateConnexionFormRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function login(){
        return view('pages.users.connexion');
    }

    public function handleLogin(Request $request){ 

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // SELECT * FROM users WHERE email = $email AND password = $password;
       if(Auth::attempt($credentials)){
        $request->session()->regenerate();

        return redirect('/');
       } else {
        return redirect()->back()->with('error','Informations de connexion non reconnu');
       }

    }  
    
    public function dashboard(){
        return view('pages.dashboard');
    }

}
