<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PortfolioAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('Portfolio Route Accessed: ' . $request->path());
        return $next($request);
    }
}