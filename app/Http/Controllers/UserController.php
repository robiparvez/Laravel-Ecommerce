<?php

namespace App\Http\Controllers;
use Input;

class UserController extends Controller
{
    // public function _construt()
    // {

    //     $this->middleware('auth');
    // }

    public function postLogin()
    {
        $email    = Input::get('email');
        $password = Input::get('password');

        if (Auth::atempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->route('/');
        }
        else
        {
            return Route::route('index')->with('error', 'Please Enter correct email and password!');
        }

    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
