<?php

namespace App\Http\Controllers;

use App\Ref;
use function compact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use function redirect;

class RefAccountController extends Controller
{
    public function index(){
        // Get account details
        $accountDetails = Ref::where('id', Auth::guard('ref')->user()->id)->first();

        return view('ref.account.index', compact('accountDetails'));
    }

    public function update(){
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
        $update = Ref::find(Auth::guard('ref')->user()->id);
        $update->name = request('name');
        $update->email = request('email');
        $update->zip = request('zip');
        $update->housenumber = request('housenumber');
        $update->housenumberadd = request('housenumberadd');
        $update->phone = request('phone');
        $update->save();
        // return to account page
        session()->flash('message', 'Uw gegevens zijn aangepast.');
        return redirect()->route('accountRef');
    }

    public function newsletter(){

    }
}
