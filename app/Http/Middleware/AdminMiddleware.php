<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

     if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }



       if(Auth::user()->role!=1){
          
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } 

              else {
                return redirect('/')->with('flash_message','You are not allowed to that link');
            }
        
            
       } 
    
     return $next($request);
    }
}
