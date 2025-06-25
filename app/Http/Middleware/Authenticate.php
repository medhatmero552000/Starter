<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
        if ($request->is('admin') || $request->is(app()->getLocale().'/admin*')) {
            return route('admin.login'); // مهم: اسم الراوت هو admin.login
        }

        return route('login'); 
    }

    return null;
    }
}
