<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function get(){
        return view('login');
    }

    public function auth(Request $request){
        $validate = $request->validate([
            'passcode' => ['required', 'min:8', 'max:8']
        ]);

        return 123;
    }
}
