<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Match;


class MatchController extends Controller
{
    public function index()
    {
//        $dbform = DB::table('typeteam', 'typematch', 'class', 'category')->get();
        $typeteam = DB::table('typeteam')->get();
        $typematch = DB::table('typematch')->get();
        $class = DB::table('class')->get();
        $category = DB::table('category')->get();

        return view('create.index', compact('typeteam', 'typematch', 'class', 'category'));
    }

    public function store(){

        // Create a new match

        // Save it to the db
        Match::create(request()->all());

        // Redirect home
        return redirect('/');
    }
}
