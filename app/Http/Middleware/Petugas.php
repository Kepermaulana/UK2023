<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Petugas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth()->guard('petugas')->check())
        {
            return redirect()->to('/petugas/login');
        }
        {
            if(!Auth()->guard('petugas')->user()->level == 'petugas')
            {
                return redirect()->to('/');
            }
        }

        return $next($request);
    }
}
