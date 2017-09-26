<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;


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
}
