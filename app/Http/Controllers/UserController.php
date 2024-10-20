<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function register(Request $request){
        if ($request->isMethod('post')){
           if(!User::where('username',$request->username)->first()){
            $user = new User();
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->username =$request->username;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('/login');
        }
           return redirect ('/register')->with('error','username deja utilise');

        }

        return view('register');
    }

    public function login (Request $request){
        if ($request->isMethod('post')){
           $user = User::where('username',$request->username)->first();
            if($user && Hash::check($request->password,$user->password)){

               Auth::login($user);
               return redirect('/home');
            }

        }

        return view('login');
    }

    public function home(){
        return view('home');
    }


    
}
