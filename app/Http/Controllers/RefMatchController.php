<?php

namespace App\Http\Controllers;

use App\Assignedref;
use App\Match_Ref;
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
        $responded_ref = Match_Ref::where('refs_id', Auth::guard('ref')->user()->id)->where('assigned','!=' , 1)->pluck('matches_id');
        $matches = Match::whereIn('id', $responded_ref)->get();

        $assigned_matches_id = Match_Ref::where('refs_id', Auth::guard('ref')->user()->id)->where('assigned', 1)->pluck('matches_id');
        $assigned_matches = Match::whereIn('id', $assigned_matches_id)->get();

        return view('ref.matches.myindex', compact('matches', 'assignedMatches', 'assigned_matches'));
    }

    public function show(Match $match)
    {
        return view('ref.matches.show', compact('match'));
    }

    public function store(){
        //check if the referee already responded to this match
        $duplicate = Match_Ref::where('matches_id', request('match_id'))->where('refs_id', Auth::guard('ref')->user()->id)->first();

        if ($duplicate == null) {

                //insert into db
                Match_Ref::create([
                    'matches_id' => request('match_id'),
                    'refs_id' => Auth::guard('ref')->user()->id
                    ]);
                //flash message
                session()->flash('message', 'Uw reactie is geplaatst.');
            return redirect()->route('refMatches');
            }
            else
            {
                //flash message
                session()->flash('message', 'U heeft al gereageerd op deze wedstrijd.');
                return redirect()->route('refMatches');
            }
    }

    public function destroy($id){

        Match_Ref::where('matches_id', $id)->where('refs_id', Auth::guard('ref')->user()->id)->delete();

        session()->flash('message', 'Uw reactie is verwijderd');

        return redirect()->route('refResponded');
    }


}
