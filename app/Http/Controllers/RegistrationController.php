<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Create a new account
    public function create(){

        return view('register.create');
    }
}
