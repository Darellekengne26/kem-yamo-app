<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function register(){
        return view('pages.users.inscription');
    }

    public function handleRegistration(User $users, createUserRequest $request){
        
        $validate = $request->validated();

        $users = User::create([
            'email' => $validate['email'],
            'telephone' => $validate['telephone'],
            'password' => Hash::make($validate['password']),
            'password_confirmation' => Hash::make($validate['password_confirmation']),
        ]);

        $users->save();

        return redirect()->back()->with('success', 'Votre compte a ete cree. Connectez vous.');

    }

    //methode pour voir la liste des utilisateurs
    public function liste(User $users){
        $users = User::all();

        return view('pages.users', [
           'users' => $users,
        ]);
    }

    //methode pour voir le detail d'un utilisateur
    public function voir($id){
        $id = request('id');

        $user = User::where('id', $id)->first();

        return view('pages.user',[
            'user' => $user,
        ]);
    }
}
