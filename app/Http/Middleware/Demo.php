<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\isJson;

class Demo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
     
        if($request->isJson() or $request->ajax()){
           abort(403, "JSON and mostly AJAX wont be execute on this app ! GO AWAY !!");
        }

        return $next($request);
    }
}
