<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }

        // Determine the user's role
        $userRole = Auth::user()->role;

        // Verify if the user's role is permitted
        if (!in_array($userRole, $roles)) {
            abort(403, 'Unauthorized access.');
        }

        // Redirect based on the user's role
        $dashboardRoutes = [
            'admin' => 'admin.dashboard',
            'staff' => 'staff.dashboard',
            'customer' => 'customer.dashboard',
        ];

        return isset($dashboardRoutes[$userRole])
            ? redirect()->route($dashboardRoutes[$userRole])
            : redirect()->route('home');
    }
}