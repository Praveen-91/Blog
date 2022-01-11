<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\Role as Middleware;

class Role extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function handle(Request $request ,Closure $next)
    {
        if(Auth::user()->role==1){
           return $next($request);            
        }
        abort(403,"Cannot access");
    }
}