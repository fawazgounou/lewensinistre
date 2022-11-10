<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user  = Http::get(env('APP_URL_API').'/user/getuser/'.session()->get('names'));
        if ($user->json("role") != 'admin') {
            return redirect()->back()->with(['error' , "Vous de dispossez pas des droits requis pour assez à cette page."]);
        }
        return $next($request);
    }
}
