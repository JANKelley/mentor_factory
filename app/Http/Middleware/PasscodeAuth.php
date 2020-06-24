<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use App\Passcode;

class PasscodeAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $c_passcode = Cookie::get('mentor_login');

        function isValidPasscode($c_passcode){
        
            $passcode = Passcode::where(
                'passcode', $c_passcode)
            ->get();
    
            if(count($passcode) < 1) {
                return false;
            }
            return true;
        }

        if(isValidPasscode($c_passcode)){
            return $next($request);
        }



        return redirect("login");
        
    }
}
