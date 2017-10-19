<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Create a new account
    public function create(){

        return view('register.create');
    }

    public function store(){

        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'address' => 'required',
            'zip' => 'required',
            'housenumber' => 'required',
            'city' => 'required',
            'phone' => 'required'
        ]);

        //hash password

        // Create the user
        $user = User::create(request(['type', 'name', 'email', 'password', 'address', 'zip', 'housenumber', 'housenumberadd', 'city', 'phone']));

        // Sign in
        auth()->login($user);
        // Redirect home
        return redirect()->home();
    }
}
