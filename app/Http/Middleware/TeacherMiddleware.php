<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TeacherMiddleware
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->role == 0){
                return $next($request);
            }
            else{
                return redirect('/teacher/login');
            }
        }
        else{
            return redirect('/teacher/login');
        }
    }
}
