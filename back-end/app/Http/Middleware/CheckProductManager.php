<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class CheckProductManager
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         if (auth()->user() && auth()->user()->role !== '1995' || auth()->user()->role !== '1999') {
//             return new Response('Forbidden', 403);
//         }
//         return $next($request);
//     }
// }
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckProductManager
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user() && auth()->user()->role !== '1995' && auth()->user()->role !== '1999') {
            return new Response('Forbidden', 403);
        }
        return $next($request);
    }
}
