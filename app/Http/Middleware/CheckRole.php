<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\TPerson;

class CheckRole
{
    public function handle(Request $request, Closure $next,$role)
    {
        $idUser = $request->session()->get('idUser');
        $person = TPerson::where('idUser', $idUser)->first();

        if (!$person || $person->role !== $role) {
            return redirect()->route('login')->withErrors("Acceso no autorizado.");
        }

        return $next($request);
    }
    /*public function handle(Request $request, Closure $next, $role, $routePrefix)
    {
        if (!$request->session()->has('idUser')) {
            return redirect()->route('login')->withErrors("Acceso no autorizado.");
        }
        $idUser = $request->session()->get('idUser');
        $person = TPerson::where('idUser', $idUser)->first();
    
        if ($person && $person->role == $role && $request->is($routePrefix . '*')) {
            return $next($request);
        }
    
        return redirect()->route('login')->withErrors("Acceso no autorizado.");
    }
    
    

    
    
    /*public function handle(Request $request, Closure $next, $role)
    {
            $idUser = $request->session()->get('idUser');
            $person = TPerson::where('idUser', $idUser)->first();

            if ($person && $person->role == $role) {
                return $next($request);
            } else {
                Session::flush();  
                return redirect("login")->withErrors("Rol incorrecto.");
            }
    }*/
}
