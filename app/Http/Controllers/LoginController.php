<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginClient() {
    	return view('login');
    }

    public function loggedIn(LoginRequest $request) {
    	if (! Auth::attempt($request->only(['email', 'password']))) {
            return back()->withErrors(['Invalid Credentials']);
        }
        return redirect()->route('home');

  	}

  	 public function logout() {
  		  Auth::logout();
  		return redirect('home');
	}
}

