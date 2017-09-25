<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;


class MatchController extends Controller
{
    public function index()
    {
        $typeteam = DB::table('typeteam')->get();

        return view('create.index', compact('typeteam'));
    }
}
