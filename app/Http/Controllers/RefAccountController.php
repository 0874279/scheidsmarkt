<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefAccountController extends Controller
{
    public function index(){

        return view('ref.account.index');
    }
}
