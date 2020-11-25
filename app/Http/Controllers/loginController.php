<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function authenticate(Request $request){
                // Retrive Input
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    // if success login
                    //echo Auth::attempt($credentials);
                    return view('welcome');

                } else {
                // if failed login
                    return redirect('/')->with('status', 'Email o Contraseña invalida');;
                //echo "Hello";
                }
    }
}
