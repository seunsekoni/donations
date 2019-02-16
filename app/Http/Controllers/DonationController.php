<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Donation;
use App\User;


class DonationController extends Controller
{
    /**
     * function to lock down the pages for only registered users
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donations = Donation::findOrFail($id);
        $user = User::find($id);
        return view('donations.show', compact('donations', 'user'));
    }


    public function create() {
        
        return view('donations.create');
    }

    public function store(Request $request) {

        
        $donation = new Donation;
        $donation->category_name = $request->category;
        $donation->amount = $request->amount;
        $donation->user_id = auth()->user()->id;
        $donation->save();

        return redirect()->route('donations.show', $donation->user_id);
    }

    public function thankyou() {
        return view('donations.success');
    }

}
