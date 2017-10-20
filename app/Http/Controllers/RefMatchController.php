<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefMatchController extends Controller
{
    public function index(){

        return view('ref.matches.index');
    }

    public function myindex(){

        return view('ref.matches.myindex');
    }
}
