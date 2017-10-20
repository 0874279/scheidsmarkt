<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubAccountController extends Controller
{
    public function index(){

        return view('ref.account.index');
    }
}
