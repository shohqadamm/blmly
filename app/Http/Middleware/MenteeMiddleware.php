<?php

namespace App\Http\Middleware;

use Closure;

class MenteeMiddleware
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
        if (auth()->user()->role !== 'student') {
            return redirect('/');
        }
        return $next($request);
    }
}
