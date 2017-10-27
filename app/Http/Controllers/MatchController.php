<?php

namespace App\Http\Controllers;

use App\Match_Ref;
use App\Ref;
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
        //search for all matches posted by club
        $matches = Match::where('club_id', auth()->id())->get();


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

            'club_id' => auth()->id(),
            'date' => request('date'),
            'time' => request('time'),
            'typeteam_id' => request('typeteam_id'),
            'teamnumber' => request('teamnumber'),
            'awayteam' => request('awayteam'),
            'typematch_id' => request('typematch_id'),
            'typecategory_id' => request('typecategory_id'),
            'typeclass_id' => request('typeclass_id')
        ]);


        session()->flash('message', 'Uw verzoek voor een scheidsrechter is geplaatst.');

        return redirect('club/matches');
    }

    public function show(Match $match)
    {
        $typeteams = DB::table('typeteams')->get();
        $typematch = DB::table('typematches')->get();
        $class = DB::table('typeclasses')->get();
        $category = DB::table('typecategories')->get();

        $respondedRefs = Match_Ref::where('matches_id', $match->id)->get();

        $assignedRef = Match_Ref::where('matches_id', $match->id)->where('assigned', 1)->first();

        if ($assignedRef == null)
        {
            return view('club.matches.show', compact('match', 'respondedRefs'));
        }
        else{
            $refereeID = $assignedRef->refs_id;
            $referee = Ref::where('id', $refereeID)->first();
            return view('club.matches.showref', compact('match', 'respondedRefs', 'refereeID', 'referee', 'typeteams', 'typematch', 'class', 'category'));
        }

    }

    public function destroy($id){

        Match::where('id', $id)->where('club_id', auth()->id())->delete();

        session()->flash('message', 'Uw verzoek is verwijderd');

        return redirect()->route('clubMatches');
    }

    public function assignref(){
        $matches_id = request('matches_id');
        $refs_id = request('refs_id');

        //Check if there already is an ref assigned
        $alreadyAssigned = Match_Ref::where('matches_id' ,$matches_id)->where('assigned', 1)->first();

        if ($alreadyAssigned == null) {
            // assign ref
            DB::update("UPDATE match_ref SET assigned = 1 WHERE (matches_id, refs_id) = ($matches_id, $refs_id) ");
            session()->flash('message', 'U heeft een scheidsrechter aangesteld.');
            return redirect()->route('clubMatches');
        }
        else {
            // error: ref already assigned
            session()->flash('message', 'Er is al een scheidsrechter aangesteld.');
            return redirect()->route('clubMatches');
        }
    }
    public function update($match){
        // validate data
        $this->validate(request(), [
            'date' => 'required',
            'time' => 'required',
            'teamnumber' => 'required',
            'awayteam' => 'required'
        ]);
        // update database
        Match::where('id', $match)->update([

            'date' => request('date'),
            'time' => request('time'),
            'typeteam_id' => request('typeteam_id'),
            'teamnumber' => request('teamnumber'),
            'awayteam' => request('awayteam'),
            'typematch_id' => request('typematch_id'),
            'typecategory_id' => request('typecategory_id'),
            'typeclass_id' => request('typeclass_id')
        ]);
        // redirect to match
        session()->flash('message', 'Wijzigingen doorgevoerd');
        return redirect()->route('clubMatches');
    }

}
