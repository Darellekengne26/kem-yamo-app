<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DeconnexionController extends Controller
{
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/connexion');


    }
}
