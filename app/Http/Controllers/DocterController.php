<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocterController extends Controller
{
    public function dashboard(){
       
        return View('doctor-dashboard');
    }

    public function profile(){

      return view('doctor-profile-setting');    
 

    }
}
