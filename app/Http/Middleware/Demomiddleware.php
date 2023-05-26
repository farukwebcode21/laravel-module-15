<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\HttpFoundation\Response;

class Demomiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lecter -2 Code 

        /*
        $key = $request->header('API-KEY');
        if($key == 'FARUK123'){
            return $next($request);
        }else{
            return response()->json('unauthorized', 401);
        }
        */

        // Lecter -2 Code 

        /*
        $key = $request->key;
        if($key == 'FARUK123'){
            return $next($request);
        }else{
            return redirect('/hello2');
        }
        */

        $key = $request->key;
        if($key == 'FARUK123'){
            return $next($request);
        }else{
            return response()->json('unauthorized', 401);
        }
    }
}
