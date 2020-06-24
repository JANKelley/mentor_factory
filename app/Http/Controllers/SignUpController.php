<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentee;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SignUpController extends Controller
{
    //Returns the Signup page view
    public function get(){
        return view('signup');
    }

    public function submit(Request $request){

        $validator = $request->validate([
            'name' => ['required'],
            'company' => ['required'],
            'email' => ['required', 'email'],
            'ifcontact' => ['required']
        ]);

        //Save to db
        $mentee = new Mentee;
        $mentee->company = $request->input('company');
        $mentee->name = $request->input('name');
        $mentee->email = $request->input('email');
        $mentee->ifcontact = $request->input('ifcontact');

        $mentee->save();

        $this->sendPasscodeMail($mentee);

        return redirect()->back()->with('status', 'Submitted Successfully!');
    }

    protected function sendPasscodeMail($mentee){
        Mail::send("email.passcode", [
            'name'=>$mentee->name,
            'email'=>$mentee->email,
            'passcode'=>Str::random(8),
            'company' => $mentee->company
            ], function($m) use ($mentee){
            $m->from('mentorfactory@jankelley.com', 'Mentor Factory');
            $m->to($mentee->email, $mentee->name)->subject('Passcode Generated');
        });
    }
}
