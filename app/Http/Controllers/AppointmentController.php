<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Appointment;
use App\Models\User;

class AppointmentController extends Controller
{
    public function checkAppointment(Request $request)

    {

        //dd($request);

        // $request->validate([
        //     'name' => 'required',
        //     'departments' => 'required',
        //     'doctor' => 'required',
        //     'date' => 'required|date',
        //     'email' => 'required',
        //     'phone' => 'required',
        // ]);




        $doctor = $request->input('doctor');
        $originalDate = $request->date;
        $selectedDate = date('Y-m-d', strtotime($originalDate));
        $selectedTime = $request->input('time');


        $existingAppointments = Appointment::where('Doctor', $doctor)
            ->where('Date', $selectedDate)
            ->where('Time', $selectedTime)
            ->count();

        //dd( $existingAppointments);

        if ($existingAppointments > 0) {

            $doctors = User::where('role', 'doctor')->get();
            session()->flash('error', 'Doctor is not available at the selected date and time. Please choose a different Date or Time.');
            return view('index', compact('doctors'));

        }else {

            $Appointment = new Appointment;

            $originalDate = $request->date;
            $formattedDate = date('Y-m-d', strtotime($originalDate));

            $Appointment->PatientName = $request->name;
            $Appointment->Department = $request->departments;
            $Appointment->Doctor = $request->doctor;
            $Appointment->PatientEmail = $request->email;
            $Appointment->PatientPhone = $request->phone;
            $Appointment->Date = $formattedDate;
            $Appointment->Time = $request->time;
            $Appointment->Comments = $request->comments;
            $Appointment->States = 'Pending';
            $saveSuccess = $Appointment->save();

            if ($saveSuccess) {

                $doctors = User::where('role', 'doctor')->get();
                session()->flash('success', 'Appointment booked successfully!');
                return view('index', compact('doctors'));

            } else {

                $doctors = User::where('role', 'doctor')->get();
                session()->flash('error', 'Appointment booked Not successfully!');
                return view('index', compact('doctors'));
            }



        }



    }


    public function checkAvailability(Request $request)
    {
        $doctorId = $request->input('doctor');
        $doctor = User::find($doctorId);
        if ($doctor) {
            $doctorId = $doctor->id;
            $doctorFName = $doctor->fname;
            $doctorLName = $doctor->lname;
        } else {

            $doctorId = null;
            $doctorFName = 'Unknown';
            $doctorLName = 'Doctor';
        }

        $originalDate = $request->input('date');
        $selectedDate = date('Y-m-d', strtotime($originalDate));

        //dd( $selectedDate);
        //dd( $doctorId);

        $bookedTimeSlots = Appointment::where('Doctor', $doctorId)
        ->where('Date', $selectedDate)
        ->pluck('Time')->toArray();

        $allTimeSlotsDBFormat = ['02.00', '02.30', '03.00','03.30'];

       // dd( $allTimeSlotsDBFormat);
        $bookedTimeSlotsDBFormat = array_map(function ($time) {
            return date('H.i', strtotime($time));
        }, $bookedTimeSlots);

       // dd( $bookedTimeSlotsDBFormat);
        $availableTimeSlotsDBFormat = array_diff($allTimeSlotsDBFormat, $bookedTimeSlotsDBFormat);

        $availableTimeSlots = array_map(function ($time) {
            return date('h:i A', strtotime($time));
        }, $availableTimeSlotsDBFormat);

        //dd( $availableTimeSlots);
        return view('booking-appointment', compact('doctorId', 'doctorFName', 'doctorLName', 'selectedDate', 'availableTimeSlots'));

    }

    public function save(Request $request)
    {
        //dd( $request);
            $states="Pending";
            $Appointment = new Appointment;

            $originalDate = $request->date;
            $formattedDate = date('Y-m-d', strtotime($originalDate));

            $Appointment->PatientName = $request->name;
            $Appointment->Department = $request->departments;
            $Appointment->Doctor = $request->doctor;
            $Appointment->PatientEmail = $request->email;
            $Appointment->PatientPhone = $request->phone;
            $Appointment->Date = $formattedDate;
            $Appointment->Time = $request->time;
            $Appointment->Comments = $request->comments;
            $Appointment->States = $states;

           //dd( $Appointment);

            $saveSuccess = $Appointment->save();

            $doctors = User::where('role', 'doctor')->get();
            session()->flash('success', 'Appointment booked successfully!');
            return view('index', compact('doctors'));

    }

    public function GetAppointmentDetails($appointment_id){


        $appointment = Appointment::find($appointment_id);

        $appointmentDoctorId =  $appointment->Doctor;
        $FinedappointmentDoctorname = User::find($appointmentDoctorId);

        $appointmentDoctorname = [
            'Fname' =>  $FinedappointmentDoctorname->fname,
            'Lname' => $FinedappointmentDoctorname->lname,
        ];
        
        
        if($appointment){

            return view('patient-invoice-dashboard', compact('appointment', 'appointmentDoctorname'));

        }
        else{
            return response()->json([
                'status'=> 404
                ]);
        }
     }


     public function GetAppointmentDetailsAdmin($appointment_id){


        $appointment = Appointment::find($appointment_id);

        $appointmentDoctorId =  $appointment->Doctor;
        $FinedappointmentDoctorname = User::find($appointmentDoctorId);

        $appointmentDoctorname = [
            'Fname' =>  $FinedappointmentDoctorname->fname,
            'Lname' => $FinedappointmentDoctorname->lname,
        ];
        
        
        if($appointment){

            return view('admin/appointmentview', compact('appointment', 'appointmentDoctorname'));
                 
        }
        else{
            return response()->json([
                'status'=> 404
                ]);
        }
     }

     


     public function AcceptAppointment($appointment_id){


        $appointment = Appointment::find($appointment_id);

        if ($appointment) {
            $appointment->update([
                'States' => 'Accepted'
            ]);

            return redirect()->back()->with('success', 'Appointment accepted successfully.');
        }else {
            return redirect()->back()->with('error', 'Appointment not found.');
        }

     }

     public function CancelAppointment($appointment_id){


        $appointment = Appointment::find($appointment_id);

        if ($appointment) {
            $appointment->update([
                'States' => 'Canceled'
            ]);

            return redirect()->back()->with('success', 'Appointment canceled successfully.');
        }else {
            return redirect()->back()->with('error', 'Appointment not found.');
        }

     }



}
