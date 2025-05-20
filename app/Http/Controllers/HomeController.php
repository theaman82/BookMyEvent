<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('landing.home');
    }

    public function register()
    {
        return view('landing.register');
    }

    public function registerAction(Request $req)
    {
        if ($req->isMethod('POST')) {
            $data = $req->validate([
                'name' => 'required|string',
                'contact' => 'required|min:10|max:10',
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $data = User::create($data);
            ToastMagic::success('User Successfully Registered');
            return redirect()->route('login');
        }
        return view('landing.register');
    }

 
    public function login(Request $req)
    {
        if ($req->isMethod('post')) {
            $data = $req->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
             if(Auth::attempt($data)){
                // if(Auth::user()->isAdmin){
                //     return redirect()->route('admin.dashboard');
                // }
                ToastMagic::success('User Looged In');
                return redirect()->route('home');
            }else{
                ToastMagic::error('Invalid Credentials');
                return redirect()->back();
            }
        }
        return view('landing.login');
    }

    public function logoutUser(){
      Auth::logout(); 
      ToastMagic::success('User Logged Out');
      return redirect()->route('login'); 
    }
}
