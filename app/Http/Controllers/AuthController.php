<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function login_aksi(Request $request){
        $request->validate([
            'username'  => 'required',
            'password'  => 'required',
        ],[
            'username.required'  => 'Username wajib di isi',
            'password.required'  => 'Password wajib di isi',
        ]);

        $data = [
            'username'  => $request->username,
            'password'  => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error','Username atau Password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
