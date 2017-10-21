<?php

namespace App\Http\Controllers;

use App\Matches_Ref;
use Illuminate\Http\Request;
use App\Match;
use Illuminate\Support\Facades\Auth;



class RefMatchController extends Controller
{
    public function index(){

        $matches = Match::all();

        return view('ref.matches.index', compact('matches'));
    }

    public function myindex(){
        // Find responded matches ID's
        $responded_ref = Matches_Ref::where('refs_id', Auth::guard('ref')->user()->id)->pluck('matches_id');

        $matches = Match::whereIn('id', $responded_ref)->get();

        return view('ref.matches.myindex', compact('matches'));
    }

    public function show(Match $match)
    {
        return view('ref.matches.show', compact('match'));
    }

    public function store(){
        //check if the referee already responded to this match
        $duplicate = Matches_Ref::where('matches_id', request('match_id'))->where('refs_id', Auth::guard('ref')->user()->id)->first();

            if ($duplicate == null) {
                //insert into db
                Matches_Ref::create([
                    'matches_id' => request('match_id'),
                    'refs_id' => Auth::guard('ref')->user()->id
                    ]);
                //flash message
                session()->flash('message', 'Uw reactie is geplaatst.');
                return view('ref.matches.index');
            }
            else
            {
                //flash message
                session()->flash('message', 'U heeft al gereageerd op deze wedstrijd.');
                return view('ref.matches.index');
            }
    }

    public function destroy($id){

        Matches_Ref::where('matches_id', $id)->where('refs_id', Auth::guard('ref')->user()->id)->delete();

        session()->flash('message', 'Uw reactie is verwijderd');
        return view('index');
    }
}
