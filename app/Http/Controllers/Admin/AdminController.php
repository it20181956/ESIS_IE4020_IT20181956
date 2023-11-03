<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Appointment;



class AdminController extends Controller
{
    //

    public function dashboard(){
     
        $doctorCount = User::where('role', 'doctor')->count();
        $patientCount  = User::where('role', 'user')->count();
        $appointmentCount = Appointment::count();
        
        return view('admin.index', compact('doctorCount','patientCount','appointmentCount'));
    }
    


    public function ViewUsers() {
        $users = User::all(); 
        
        // Fetch the users


        
        return view('admin.add-doctor', ['users' => $users, 'currentUser' => Auth::user()]);
    }

    public function ViewPatient() {
        $patients = User::all(); 
        
        // Fetch the users


        
        return view('admin.add-patient', ['patients' => $patients, 'currentUser' => Auth::user()]);
    }
    

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [


            'fname' => 'required',
            'lname' => 'required',
            'p_number' => 'required',
            'email'=> 'required',
            'password' => 'required',
           'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480|dimensions:min_width=100,min_height=100,max_width=400,max_height=400',




        ]);


        if ($validator->fails()) {

            return back()->with('eror', 'Somrthing wrong !');
        } else {


            $country = User::create([
             
                            'fname' => $request->fname,
                            'lname' => $request->lname,
                            'p_number' => $request->p_number,
                            'email' => $request->email,
                            'password' => Hash::make($request->password),
                            'role' => $request->role,
                            'type' => $request->type,
                            'avatar' => $request->avatar,
                            'gender' => $request->gender,
                            'age' => $request->age,
                            'address' => $request->address,
                            'overview' => $request->overview
            ]);
            
             $fileName = time() . '.' . $request->avatar->extension();
            $request->avatar->move('public/avatar', $fileName);
    //   $request->file('avatar')->move('public/uploads', $filename);
            // Include the image name in the Country record
            $country->avatar = $fileName;
            $country->save();
        }





         return redirect()->back()->with('status', 'Docter Add Success');


    }


    public function update(Request $request, $userId)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'p_number' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,' . $userId,
            'overview' => 'required',
        ]);
    
        // Find the user you want to update based on $userId
        $user = User::findOrFail($userId);
    
        // Update user data based on the validated form inputs
        $user->fname = $validatedData['fname'];
        $user->lname = $validatedData['lname'];
        $user->p_number = $validatedData['p_number'];
        $user->email = $validatedData['email'];
        $user->overview = $validatedData['overview'];
    
        $user->save();
    
        return redirect()->back()->with('status', 'Data Update Success');
    }
    

    public function pwupdate(Request $request, $userId) {
        $validate = $request->validate([
            'current_password' => ['required', 'min:8', 'string'],
             'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        if ($validate) {
            $user = User::findOrFail($userId);
    
            if (Hash::check($request->current_password, $user->password)) {
                $user->password = Hash::make($request->password);
                $user->save();
    
                return redirect()->back()->with('status', 'Password updated successfully.');
            } else {
                return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.']);
            }
        }
    }
    
    
    public function showProfile($userId) {
        
        $patient = User::findOrFail($userId);
        return view('profile.edit', compact('patient'));
    }
    



    public function DocterPro($docId) {

        
        $user = User::findOrFail($docId);
        return view('admin.dr-profile',compact('user'));
    }

    public function PatientPro($petiId) {

        
        $user = User::findOrFail($petiId);
        return view('admin.patient-profile',compact('user'));
    }
    
    
    public function viewDoctor() {
        $doctors = User::where('role', 'doctor')->get(); 
    
        return view('admin.doctors', ['doctors' => $doctors]);
    }
    
    public function viewUser() {
        $patients = User::where('role', 'user')->get(); 
    
        return view('admin.patients', ['patients' => $patients]);
    }

    public function delete($petiId){

        User::findOrFail($petiId)->delete();

        return redirect()->back()->with('erors', 'Pationt Delete Sucsess');
    }
}
