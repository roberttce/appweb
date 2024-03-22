<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Session;

class CheckSessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('firstName') && !Session::has('surName')) {
            return redirect('login');
        }
        /*
        $role = Session::get('role'); 
        if (!$this->checkRouteAccess($request, $role)) {
            return redirect('login');
        }*/

        return $next($request);
    }
    protected function checkRouteAccess(Request $request, $role)
    {
        $currentRoute = $request->route()->getName();

        switch ($role) {
            case 'teacher':
                return str_starts_with($currentRoute, 'teacher.');
            case 'admin':
                return str_starts_with($currentRoute, 'admin.');
            case 'student':
                return str_starts_with($currentRoute, 'student.');
            default:
                return false;
        }
    }
}
