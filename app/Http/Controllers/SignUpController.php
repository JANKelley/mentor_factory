<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentee;
use App\Company;
use App\Passcode;
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
            'email' => ['required', 'email', 'unique:mentees,email'],
            'ifcontact' => ['required']
        ]);

        //Save to db
        $mentee = new Mentee;
        $mentee->name = $request->input('name');
        $mentee->email = $request->input('email');
        $mentee->ifcontact = $request->input('ifcontact');
        $mentee->save();

        $company = new Company;
        $company->name = $request->input('company');
        $company->mentee_id = $mentee->id;
        $company->save();

        $passcode = new Passcode;
        $passcode->passcode = Str::random(8);
        $passcode->company_id = $company->id;
        $passcode->save();

        $this->sendPasscodeMail($mentee, $passcode, $company);

        return redirect("/")->with('status', 'Success🎉, you will receive an email with your passcode shortly!');
    }

    protected function sendPasscodeMail($mentee, $passcode, $company){
        Mail::send("email.passcode", [
            'name'=>$mentee->name,
            'email'=>$mentee->email,
            'passcode'=> $passcode->passcode,
            'company' => $company->name
            ], function($m) use ($mentee){
            $m->from('info@jankelley.com', 'Jan Kelley Mentor Factory');
            $m->to($mentee->email, $mentee->name)->subject('Passcode Generated');
        });
    }
}
