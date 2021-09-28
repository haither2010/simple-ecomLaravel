<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class userAuth
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
        //requested path method reference https://laravel.com/docs/8.x/requests#request-path-and-method
        //user session created in userController.php that $req->session()->put('user', $users);
        if($request->path() == 'login' && $request->session()->has('user'))
        {
            return redirect('/');
        }
        return $next($request);
    }
}
