<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClubAccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        // Get account details
        $accountDetails = Club::where('id', auth()->id())->first();

        return view('club.account.index', compact('accountDetails'));
    }

    public function update()
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'zip' => 'required',
            'housenumber' => 'required',
            'city' => 'required',
            'phone' => 'required'

        ]);
        // update data
        $update = Club::find(auth()->id());
        $update->name = request('name');
        $update->email = request('email');
        $update->zip = request('zip');
        $update->housenumber = request('housenumber');
        $update->housenumberadd = request('housenumberadd');
        $update->phone = request('phone');
        $update->city = request('city');
        $update->address = request('address');

        $update->save();
        // return to account page
        session()->flash('message', 'Uw gegevens zijn aangepast.');
        return redirect()->route('accountClub');
    }
}

