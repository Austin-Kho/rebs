<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class SubjectAuth
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
        // if (!Auth::user()->isAdmin() && Auth::user()->id !== $request->doc->user_id
        // && $request->doc->is_public === 0) {
        if (!Auth::user()->isAdmin() && $request->doc->is_public === 0) {
            return redirect(route('docs.index'));
        }

        return $next($request);
    }
}
