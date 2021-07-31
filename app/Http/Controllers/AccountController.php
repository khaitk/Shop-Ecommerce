<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function login(){
        return view('users.login');
    }

    public function create_account(Request $request){
        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));

        $users->save();

        return redirect()->back();
    }

    public function process_login(Request $request){
        $users = $request->only('email', 'password');
        if(Auth::attempt($users)){
            return redirect()->intended('/');
        }else{
            return back()->with('error', 'Email and password');
        }
    }

    public function logout(Request $request){
        if (Auth::id() == 1){
            $request->session()->flush();
            Auth::logout();

            return redirect('/');
        }
        else{
            return redirect('login');
        }

    }

    /*
     * Login Admin
     */

    protected function guard() {
        return Auth::guard('admin');
    }

    public function login_admin(){
        return view('admin.login');
    }

    public function process_login_admin(Request $request){

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin');
        }
        else{
            return back()->with('error', 'Email and password');
        }
    }

    public function logout_admin(Request $request){
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            $this->guard()->logout();
            return redirect('/admin/login');
        }
    }
}
