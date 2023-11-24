<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }


    public function homeadmin()
    {
        return view('login.home');
    }
 
    
    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $isAdmin = $credentials['email'] == 'admin@gmail.com' && $credentials['password'] == 'admin123';
        if ($isAdmin ) {
            return view('login.home');
        }
        elseif(Auth::attempt($credentials)){

            return view('contact.thanks');
        }
        return redirect()->back()->withErrors(['login' => 'Invalid credentials'])->withInput();
       
    }



    public function someMethod()
    {
        if (Auth::check()) {
            $name = Auth::user()->name;
        } else {

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    }
