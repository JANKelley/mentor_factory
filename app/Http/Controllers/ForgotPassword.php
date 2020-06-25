<?php

namespace App\Http\Controllers;

use App\Company;
use App\Passcode;
use Illuminate\Http\Request;
use App\Mentee;
use Illuminate\Support\Facades\Mail;

class ForgotPassword extends Controller
{
    public function get(){
        return view('forgot-password');
    }

    public function submit(Request $request){
        $request->validate([
            'email' => ['email', 'required']
        ]);

        $email = $request->input('email');

        $mentee = Mentee::where(
            'email', $email)->first();

        if ($mentee !== null){
            $company = Company::where('mentee_id', $mentee->id)->first();
            $passcode = Passcode::where('company_id', $company->id)->first();

            Mail::send("email.forgot-passcode", [
                'email'=>$mentee->email,
                'passcode'=> $passcode->passcode,
            ], function($m) use ($mentee){
                $m->from('mentorfactory@jankelley.com', 'Mentor Factory');
                $m->to($mentee->email, $mentee->name)->subject('Passcode Found!');
            });
        }

        return redirect("/")->with('status', 'You will receive an email shortly, if an valid email is found.');
    }
}
