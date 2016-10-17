<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ApiAccess
{

    protected $guard = 'api';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard='')
    {
        
        $auth = auth()->guard('api');
 
        if ($auth->check()) {
            return $next($request);
        };
     
        abort(403, "You're not authorized to access this public REST API.");

        /*return $next($request);*/
    }
}
