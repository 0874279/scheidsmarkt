<?php

namespace App\Http\Controllers;

use App\Club;
use App\Ref;
use Illuminate\Support\Facades\Auth;
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

        if (request() ['type'] == 1){
            // Create the club
            $club = Club::create(request(['name', 'email', 'password', 'address', 'zip', 'housenumber', 'housenumberadd', 'city', 'phone']));
            // Sign in
            auth()->login($club);
            // Account created message
            session()->flash('message', 'Bedankt voor het registreren. U bent automatisch ingelogd.');
            // Redirect home
            return redirect()->home();
        }

        else {
            // Create the referee
            $ref = Ref::create(request(['name', 'email', 'password', 'address', 'zip', 'housenumber', 'housenumberadd', 'city', 'phone']));
            // Sign in
            auth::guard('ref')->login($ref);
            // Account created message
            session()->flash('message', 'Bedankt voor het registreren. U bent automatisch ingelogd.');
            // Redirect home
            return redirect()->home();
        }



    }
}
