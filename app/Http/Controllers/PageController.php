<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class PageController extends Controller
{
    public function login()
	{
		return view('login.login');
	}
	public function register()
	{
		return view('login.register');
	}
    public function proses_login(Request $r){
    	$name = $r->name;
    	$password = $r->password;
    	if (Auth::attempt(['email' => $name, 'password' => $password]) || Auth::attempt(['name' => $name, 'password' => $password])){
    		if (Auth::user()->role == "1"){
    			return view('/admin/index');
    		}
            if (Auth::user()->role == "2"){
    			return view('/user/index');
    		}
            
    	}
    		return redirect('/not_found/404.jpg');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
