<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->cookie('IsMember') && session('key')) {

            $result = $request->cookie('IsMember') == session('key');
            return $result ?  redirect()->route('home') : $next($request);
        }
        return $next($request);
    }
}
