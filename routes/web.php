<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsDocter;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;



use App\Http\Controllers\ViewController;
use App\Http\Controllers\AppointmentController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/aboutus', function () { return view('aboutus');})->name('aboutus.route');
Route::get('/contact', function () { return view('contact');})->name('contact.route');

Route::get('/doctor-team-one',[FrontController::class,'front'])->name('doctor-team-one.route');










// Appointment Routs
Route::get('/', [ViewController::class, 'index'])->name('home.route');
Route::post('/check', [AppointmentController::class, 'checkAppointment'])->name('Check.Appointment');
Route::post('/availability', [AppointmentController::class, 'checkAvailability'])->name('Check.Availability');
Route::post('/save', [AppointmentController::class, 'save'])->name('Save.Appointment');

Route::get('/appointment/{id}', [AppointmentController::class, 'GetAppointmentDetails'])->name('Get.Appointment.Details');
Route::get('/appointmentdetails/{id}', [AppointmentController::class, 'GetAppointmentDetailsAdmin'])->name('Get.Appointment.Details.admin');
Route::get('/acceptappointment/{id}', [AppointmentController::class, 'AcceptAppointment'])->name('accept.Appointment');
Route::get('/cancelappointment/{id}', [AppointmentController::class, 'CancelAppointment'])->name('cancel.Appointment');
Route::get('/appointment',[ViewController::class, 'Adminappointment'])->name('appointment.route');
Route::get('/doctor-appointment',[ViewController::class, 'Doctorappointment'])->name('doctor-appointment.route');


 //payment Gateway
Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');







// nirmana routs


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
    // ...

    //Admin Docters Details

    Route::get('/admin/add-doctor', [AdminController::class, 'ViewUsers'])->name('admin.add-doctor');
    Route::post('/docter/store', [AdminController::class, 'store'])->name('docter.store');
    Route::get('/admin/{docId}/docter-prof', [AdminController::class, 'DocterPro'])->name('admin.docter-prof');
    Route::get('/doctors.view',[AdminController::class,'viewDoctor'])->name('doctors.view');


    Route::get('/profile', [ProfileController::class, 'profile'])->name('user.profile');
    Route::post('/avatar.manage',[ProfileController::class, 'storeAvatar'])->name('avatar.manage');
    Route::post('/avatars.manage',[ProfileController::class, 'storeAvatars'])->name('avatars.manage');


        //Admin Patients Details


    Route::get('/patients.view',[AdminController::class,'viewUser'])->name('patients.view');
    Route::get('/admin/add-patients', [AdminController::class, 'ViewPatient'])->name('admin.add-patients');
    Route::get('/admin/{petiId}/patient-prof', [AdminController::class, 'PatientPro'])->name('admin.patient-prof');
    Route::get('/patients/{petiId}', [AdminController::class, 'delete'])->name('patients.delete');




  
    Route::post('/user/{userId}/update', [AdminController::class, 'update'])->name('user.update');
    Route::post('/pass/{userId}/update', [AdminController::class, 'pwupdate'])->name('pass.update');

    Route::get('/user/{userId}/edit', [AdminController::class, 'showProfile'])->name('user.edit');


//    Route::get('/patients', function () { return view('admin.patients');})->name('patients.route');



});


Route::prefix('doctor')->middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/doctor-dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');    // ...

    Route::get('/doctor-profile-setting', function () { return view('doctor-profile-setting');})->name('doctor-profile-setting.route');

    // Route::get('/docter-profile', [DoctorController::class, 'profile'])->name('docter-profile');



});

// User Routes

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');





});