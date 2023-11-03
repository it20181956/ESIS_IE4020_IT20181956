<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontController extends Controller
{

      public function front() {
        $doctors = User::where('role', 'doctor')->get(); 
    
        return view('doctor-team-one',compact('doctors'));
    }
    
    

}
