<?php

namespace App\Http\Controllers;

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
            return back();
        }

         return redirect()->home();
    }

    // logout
    public function destroy(){
        auth()->logout();

        return redirect()->home();
    }
}
