<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            $locale = session()->get('locale');
            app()->setLocale($locale);
            session()->put('locale', $locale); // Ensure the session is persisted
        } else {
            // Set default locale if none is set
            $locale = config('app.locale', 'fr');
            app()->setLocale($locale);
            session()->put('locale', $locale);
        }
        return $next($request);
    }
} 