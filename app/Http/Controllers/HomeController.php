<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('landing.home');
    }

    public function register(){
        return view('landing.register');
    }

    public function registerAction(Request $req){
       if($req->isMethod('post')){
         $data = $req->validate([
            'name' => 'required|string',
            'contact' => 'required|min:10|max:10',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $data = User::create($data);
        return redirect()->route('home');
       }
       return view('landing.register');
    }
}
