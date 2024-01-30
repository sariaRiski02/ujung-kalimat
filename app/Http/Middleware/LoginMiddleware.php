<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $IsMember = $request->cookie('IsMember');
        $isSession = session()->getName('key');

        if ($IsMember && $isSession) {

            return $next($request);
        } else {
            session()->forget('key');
            return response()->redirectToRoute('signin');
        }
    }
}
