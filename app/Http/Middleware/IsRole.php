<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Crypt;
use Auth;
class IsRole
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
      // dd( Auth::user()->role_id);
        if (Auth::user() &&  Auth::user()->role_id != NULL) {
             return $next($request);
        }
        elseif(Auth::user() &&  Auth::user()->role_id == NULL) 
        {
            $id= Auth::user()->id;
            return redirect('apply-for/'.Crypt::encrypt($id));
        }
        else   

       {
        return redirect('faces/login');
       }
    }
}
