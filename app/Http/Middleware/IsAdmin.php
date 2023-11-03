<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\DoctorController;


class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     *  public function handle(Request $request, Closure $next): Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Check if the user is suspended
            if (Auth::user()->role == 'sus') {
                Auth::logout();
                Session::flush();
                return redirect('/suspended');
            }
    
            // Check if the user is an admin
            if (Auth::user()->role == 'admin') {
                return $next($request); // Continue with the request for admins
            } elseif (Auth::user()->role == 'doctor') {
                return $next($request); // Continue with the request for doctors
            } else {
                return redirect('/home')->with("message", "Access denied!");
            }
        } else {
            return redirect('/login')->with("message", "Login Required!");
        }
    }
    
    
    
}
