<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function manageUsers(){
        $users = User::paginate(10);
        return view('admin.manage-users', compact('users'));
    }

    public function deleteUser($id){
        User::find($id)->delete();
        return redirect()->back();
    }
}
