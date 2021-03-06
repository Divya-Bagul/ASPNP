<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /*
     * @var array
     */
    protected $guards = [];

    /*
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string[] ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     /
    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;

        return parent::handle($request, $next, ...$guards);
    }

    /*
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (array_first($this->guards) === 'admin') {
                return route('admin.login');
            }
            return route('login');
        }
    }
}