<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passcode;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function get(){
        return view('login');
    }

    public function auth(Request $request){
        $validate = $request->validate([
            'passcode' => ['required', 'min:8', 'max:8']
        ]);

        $passcode = Passcode::where(
            'passcode', $request->input('passcode'))
        ->get();

        if(count($passcode) < 1) {
            return redirect()->back()->with('status_error', 'Passcode not valid! 🤦‍♂️');
        }
        
        //Passcode Valid Set Session Cookie

        Cookie::queue("mentor_login", $passcode[0]->passcode, 1440); // 60*24

        return redirect('/resource');
    }
}
