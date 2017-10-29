<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class SessionsController extends Controller
{
    public function __construct() {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    // login
    public function create(){

        return view('sessions.create');
    }

    // login attempt
    public function store(){
        if (! auth()->attempt(request(['email', 'password']))) {

            if (! Auth::guard('ref')->attempt(request(['email', 'password']))) {
                return back()->withErrors(['Gebruikersnaam of wachtwooord onjuist.']);

            }

        }

        session()->flash('message', 'U bent ingelogd.');



        return redirect()->home();
    }

    // logout
    public function destroy(){
        auth()->logout();
        auth::guard('ref')->logout();

        session()->flash('message', 'U bent uitgelogd.');

        return redirect()->home();
    }
}
