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

        Match::create(request()->all());
        return redirect('club/matches');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        return view('club.matches.show', compact('match'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
