<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;

class ViewController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('index', compact('doctors'));
    }

    public function patientdashboard()
    {

        $appointments = Appointment::all();
        return view('home')->with('Appointments', $appointments);

    }

    public function Adminappointment()
    {

        $Appointments = Appointment::with('doctor')->get();

        //dd($Appointments);
        return view('admin/appointment', compact('Appointments'));

    }

    public function Doctorappointment()
    {

        $Appointments = Appointment::with('doctor')->get();

        //dd($Appointments);

        return view('doctor-appointment', compact('Appointments'));

    }

    
}
