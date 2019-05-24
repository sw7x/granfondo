<?php

namespace App\Http\Middleware;

use Closure;

class AdminPanelMiddleware
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

        if(session('adminLogin') != 'true'){
            return redirect()->route('admin_index');
        }




        return $next($request);
    }
}
