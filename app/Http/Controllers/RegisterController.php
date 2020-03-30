<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerClient() {
    	return view('register');
    }

    public function registered(RegisterRequest $request) {
    	$register = $request->all();
        $register['password'] = bcrypt($register['password']);

        $user = User::create($register);

        return redirect()->route('home');
    }
}
