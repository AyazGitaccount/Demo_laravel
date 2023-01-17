<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function register(Request $req)
    {

        $validate = $req->validate(
            [
                'name' => 'required|max:255|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|confirmed',
                // 'password_confirmation' => 'required|min:8|confirmed',
            ],
            [
                'name.required' => 'The name field is required.',
                'email.required' => 'The email field is required.',
                'email.unique' => 'The email has already been taken.',
                'password.required' => 'The password field is required.',
                'password.min' => 'The password must be at least 8 characters.',
            ]
        );

        User::create([
            'name'=> $req['name'],
            'email'=> $req['email'],
            'password'=> Hash::make($req['password'])        ]);
        return redirect()->intended('/signin')->with('success', "Registration successful");

    }

    function login(Request $req)
    {
        
        
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ]);

        $credentials = $req->only('email','password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('success', "Loggedin successfuly");
        }
        
        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
    }
}
