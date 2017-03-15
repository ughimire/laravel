<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {

        $status = Auth::guard("admin");

        $part1 = Request::segment(1);

        if ($part1 == $guard) {

            if (!$status->check()) {

                return redirect('/lara-admin');

            }

        }

        return $next($request);

    }
}
