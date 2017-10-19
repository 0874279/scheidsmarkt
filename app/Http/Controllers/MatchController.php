<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Match;


class MatchController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $matches = Match::all();


        return view ('club.matches.index', compact('matches'));
    }

    public function create()
    {
        $typeteams = DB::table('typeteams')->get();
        $typematch = DB::table('typematches')->get();
        $class = DB::table('typeclasses')->get();
        $category = DB::table('typecategories')->get();

        return view('club.matches.create', compact('typeteams', 'typematch', 'class', 'category'));
    }

        public function store(Request $request)
    {
        $this->validate(request(), [
            'date' => 'required',
            'time' => 'required',
            'teamnumber' => 'required',
            'awayteam' => 'required'
        ]);

        Match::create([

            'user_id' => auth()->id(),
            'date' => request('date'),
            'time' => request('time'),
            'typeteam_id' => request('typeteam_id'),
            'teamnumber' => request('teamnumber'),
            'awayteam' => request('awayteam'),
            'typematch_id' => request('typematch_id'),
            'typecategory_id' => request('typecategory_id'),
            'typeclass_id' => request('typeclass_id')
        ]);


        return redirect('club/matches');
    }

    public function show(Match $match)
    {
        return view('club.matches.show', compact('match'));
    }

}
