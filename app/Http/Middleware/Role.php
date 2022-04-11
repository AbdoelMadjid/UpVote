<?php

namespace App\Http\Middleware;

use App\Models\Role as RoleModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) // I included this check because you have it, but it really should be part of your 'auth' middleware, most likely added as part of a route group.
            return redirect()->route('login');

        $user = Auth::user();

        if ($user->hasRole(RoleModel::IS_ADMIN))
            return $next($request);

        foreach ($roles as $role) {
            if ($role === 'admin') {
                $role = RoleModel::IS_ADMIN;
            } else if ($role === 'manager') {
                $role = RoleModel::IS_MANAGER;
            } else if ($role === 'user') {
                $role = RoleModel::IS_USER;
            }

            // Check if user has the role This check will depend on how your roles are set up
            if ($user->hasRole($role))
                return $next($request);
        }

        return abort(403, 'Kamu tidak memiliki akses!');
    }
}
