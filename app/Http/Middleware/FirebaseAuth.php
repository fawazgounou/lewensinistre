<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class FirebaseAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      $uid = Session::get('user_id');
      if ($uid) {
        return $next($request);
      }else{
        Session::flush();
        return redirect()->route('connexion')->with(['error' , "Pour accéder à cette page vous devrez vous connecter."]);
      }

    }
}
