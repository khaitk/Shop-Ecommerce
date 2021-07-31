<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(){
        if(Auth::guard('admin')->check()){
            $users = User::paginate(5);
            return view('/admin.users.showuser', compact('users'));
        }else{
            return redirect('admin/login');
        }

    }

    public function delete($id){
        if(Auth::guard('admin')->check()){
            $users = User::find($id);
            $users->delete();
            return redirect()->back();
        }else{
            return redirect('admin/login');
        }

    }
}
