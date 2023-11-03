<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            } elseif (Auth::user()->role == 'doctor') {
                return redirect('/doctor-dashboard');
            } else {

                $appointments = Appointment::all();
                return view('home')->with('Appointments', $appointments);
                //return view('home'); // Redirect or show user dashboard
            }
        } else {
            return redirect('/login')->with("message", "Login Required!");
        }
    }
    






// public function index()
// {
//     if (Auth::check()) {
//         $user = auth()->user();
//         if ($user->role == 'admin') {
//             return redirect('/admin/dashboard');
//         } else {
//             // Assuming 'servers' is a relationship on the User model to get the user's servers
//             $servers = $user->servers;
//             $count = $servers->count();
//             return view('home', compact('servers', 'count'));
//         }
//     } else {
//         return redirect('/login')->with("message", "Login Required!");
//     }
// }



// public function index()
// {
//     if (Auth::check()) {
//         if (Auth::user()->role == 'admin') {
//             return redirect('/admin/dashboard');
//         } else {
//             $user = auth()->user();
//             $count = $user->servers->count();
//             return view('home', compact('count'));
//         }
//     } else {
//         return redirect('/login')->with("message", "Login Required!");
//     }
// }



    // public function view()
    // {
    //     $servers = Server::all();
    //     $count = $servers->count(); 
    //     return view('home', compact('servers', $count));
    // }


}
