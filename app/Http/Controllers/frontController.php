<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }
    public function a_propos()
    {
        return view('pages.a propos');
    }
    public function menu()
    {
        return view('pages.menu');
    }
    public function reservation()
    {
        return view('pages.reservation');
    }
    public function conseil()
    {
        return view('pages.conseil');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function connexion()
    {
        return view('pages.connexion');
    }
    public function commande()
    {
        return view('pages.commande');
    }
}
