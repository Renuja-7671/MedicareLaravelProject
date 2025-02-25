<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/login',
        '/register',
        '/admin/dashboard',
        '/admin/users',
        '/admin/users/*',
        '/admin/medicine',
        '/admin/medicine/*',
        '/admin/users/*/role'
        
    ];
}
