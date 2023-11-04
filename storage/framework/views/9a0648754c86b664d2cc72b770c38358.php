<?php $__env->startSection('content'); ?>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                  
                </div>


 <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

<!-- Start -->
        <section class="bg-hero">
            <div class="container">
               
                <div class="row mt-lg-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="rounded shadow overflow-hidden sticky-bar">
                            <div class="card border-0">
                                <img src="<?php echo e(asset('public/avatar/' . auth()->user()->avatar)); ?>" class="img-fluid" alt="">
                            </div>

                            <div class="text-center avatar-profile margin-nagative mt-n5 position-relative pb-4 border-bottom">
                                <img src="assets/images/client/09.jpg" class="rounded-circle shadow-md avatar avatar-md-md" alt="">
                                <h5 class="mt-3 mb-1"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></h5>
                                <p class="text-muted mb-0">25 Years old</p>
                            </div>

                            <div class="list-unstyled p-4">
                                

                                


                                <div class="d-flex align-items-center mt-2">
                                    <i class="uil uil-book-open align-text-bottom text-primary h5 mb-0 me-2"></i>
                                    <h6 class="mb-0">Phone No.</h6>
                                    <p class="text-muted mb-0 ms-2"><?php echo e(Auth::user()->p_number); ?></p>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <i class="uil uil-italic align-text-bottom text-primary h5 mb-0 me-2"></i>
                                    <h6 class="mb-0">Address</h6>
                                    <p class="text-muted mb-0 ms-2"><?php echo e(Auth::user()->address); ?></p>
                                </div>

                                
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-8 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 shadow overflow-hidden">
                            <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded-0 shadow overflow-hidden bg-light mb-0" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link rounded-0 active" id="overview-tab" data-bs-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Profile</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="experience-tab" data-bs-toggle="pill" href="#pills-experience" role="tab" aria-controls="pills-experience" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Profile Settings</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                            </ul>

                            <div class="tab-content p-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <h5 class="mb-0">Introduction:</h5>

                                    <p class="text-muted mt-4 mb-0">Web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. Dummy texts have been in by typesetters since the 16th century.</p>

                                    <div class="row">
                                        <div class="col-lg-6 col-12 mt-4">
                                            <h5>Appointment List</h5>
                                            <?php $__currentLoopData = $Appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(Auth::user()->email == $Appointment->PatientEmail): ?>
                                                    <div class="d-flex justify-content-between align-items-center rounded p-3 shadow mt-3">
                                                        <?php if($Appointment->Department == "Eye Care"): ?>
                                                            <i class="ri-heart-pulse-line h3 fw-normal text-primary mb-0"></i>
                                                        <?php endif; ?>
                                                        <?php if($Appointment->Department == "Gynecologist"): ?>
                                                            <i class="ri-stethoscope-line h3 fw-normal text-success mb-0"></i>
                                                        <?php endif; ?>
                                                        <?php if($Appointment->Department == "Psychotherapist"): ?>
                                                            <i class="ri-virus-line h3 fw-normal text-warning mb-0"></i>
                                                        <?php endif; ?>
                                                        <?php if($Appointment->Department == "Dentist"): ?>
                                                            <i class="ri-dossier-line h3 fw-normal text-secondary mb-0"></i>
                                                        <?php endif; ?>
                                                        <?php if($Appointment->Department == "Gastrologist"): ?>
                                                            <i class="ri-eye-2-line h3 fw-normal text-info mb-0"></i>
                                                        <?php endif; ?>
                                                        <?php if($Appointment->Department == "Neurologist"): ?>
                                                        <i class="ri-microscope-line h3 fw-normal text-danger mb-0"></i>
                                                        <?php endif; ?>

                                                        <div class="flex-1 overflow-hidden ms-2">
                                                            <h6 class="mb-0"><?php echo e($Appointment->Department); ?></h6>
                                                        </div>
                                                        <span class="mb-0"><?php echo e($Appointment->Date); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>

                                        <div class="col-lg-6 col-12 mt-4">
                                            <h5>Payment List</h5>
                                            <?php $__currentLoopData = $Appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <?php if(Auth::user()->email == $Appointment->PatientEmail): ?>
                                                    <div class="d-flex justify-content-between align-items-center rounded p-3 shadow mt-3">
                                                        <div class="flex-1 overflow-hidden">
                                                            <h6 class="flex-1 mb-0"><?php echo e($Appointment->Department); ?></h6>
                                                            <p class="text-muted mb-0 text-truncate small"><?php echo e($Appointment->States); ?></p>
                                                        </div>
                                                        <a class=" btn btn-primary" href="<?php echo e(route('Get.Appointment.Details', ['id' => $Appointment->id])); ?>">View</a>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>
                                </div>

                                <!-- View Appointment Modal -->
                                    <div class="modal fade" id="view-appointment-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">Appointment Details</h5>
                                                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                                                </div>
                                                <div class="modal-body p-3 pt-4">
                                                    <div id="appointment-details"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="tab-pane fade" id="pills-experience" role="tabpanel" aria-labelledby="experience-tab">
                                    <h5 class="mb-0">Personal Information :</h5>
                                    <div class="row align-items-center mt-4">
                                        <div class="col-lg-2 col-md-4">
                                            <img src="<?php echo e(asset('public/avatar/' . auth()->user()->avatar)); ?>" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                                        </div><!--end col-->

                                        
                                    </div><!--end row-->

                                  <form class="mt-4" method="post" action="<?php echo e(route('user.update',Auth::user()->id)); ?>">
                                           <?php echo csrf_field(); ?>
                                           
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input name="fname" id="fname" type="text" class="form-control" placeholder="First Name :" value="<?php echo e(Auth::user()->fname); ?>">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input name="lname" id="lname" type="text" class="form-control" placeholder="Last Name :" value="<?php echo e(Auth::user()->lname); ?>">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email :"value="<?php echo e(Auth::user()->email); ?>">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone no.</label>
                                        <input name="p_number" id="p_number" type="text" class="form-control" placeholder="Phone no. :"value="<?php echo e(Auth::user()->p_number); ?>">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Bio Here</label>
                                        <textarea name="overview" id="overview" rows="4" class="form-control" placeholder="Bio :" value="<?php echo e(Auth::user()->overview); ?>"></textarea>
                                    </div>
                                </div>
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save changes">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->

                                    
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->


        <!-- View Invoice Start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Patient Invoice</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <div class="row mb-4">
                            <div class="col-lg-12 col-md-6">
                                <img src="assets/images/logo-dark.png" height="22" alt="">
                                <ul class="list-unstyled pt-3">
                                    <li class="d-flex">
                                        <small class="mb-0 text-muted">Invoice no. : </small>
                                        <small class="mb-0 text-dark">&nbsp;&nbsp;#54638990jnn</small>
                                    </li>
                                    <li class="d-flex mt-2">
                                        <small class="mb-0 text-muted">Patient Name : </small>
                                        <small class="mb-0" id="viewPatientName" ></small>
                                    </li>
                                    <li class="d-flex mt-2">
                                        <small class="mb-0 text-muted">Email : </small>
                                        <small class="mb-0"id="viewEmail"></small>
                                    </li>
                                    <li class="d-flex mt-2">
                                        <small class="mb-0 text-muted">Phone : </small>
                                        <small class="mb-0" id="viewPhone"></small>
                                    </li>
                                    <li class="d-flex mt-2">

                                    </li>
                                    <li class="d-flex mt-2">
                                        <small class="mb-0 text-muted">Doctor Name : </small>
                                        <small class="mb-0" id="viewDoctorFName"></small>&nbsp;<small class="mb-0" id="viewDoctorLName"></small>
                                    </li>
                                    <li class="d-flex mt-2">
                                        <small class="mb-0 text-muted">Department : </small>
                                        <small class="mb-0" id="viewDepartment"></small>
                                    </li>
                                    <li class="d-flex mt-2">
                                        <small class="mb-0 text-muted">Time : </small>
                                        <small class="mb-0" id="viewTime" ></small>
                                    </li>
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="pt-4 border-top">
                            <div class="row">
                                <div class="col-lg-8 col-md-6">
                                    <h5 class="text-muted fw-bold">Invoice <span class="badge rounded-pill bg-soft-success fw-normal ms-2" id="viewStates"></span></h5>
                                    <h6 id="catagory"></h6>

                                    <ul class="list-unstyled">
                                        <li class="d-flex mt-2">
                                            <small class="mb-0 text-muted">Issue Dt. : </small>
                                            <small class="mb-0 text-dark" id="viewIssuedate"></small>
                                        </li>

                                        <li class="d-flex mt-2">
                                            <small class="mb-0 text-muted">Due Dt. : </small>
                                            <small class="mb-0 text-dark" id="viewDuedate"></small>
                                        </li>
                                    </ul>
                                </div><!--end col-->

                            </div><!--end row-->

                            <div class="invoice-table pb-4">
                                <div class="table-responsive shadow rounded mt-4">
                                    <table class="table table-center invoice-tb mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-start border-bottom p-3" style="min-width: 60px;">No.</th>
                                                <th scope="col" class="text-start border-bottom p-3" style="min-width: 220px;">Item</th>
                                                <th scope="col" class="text-center border-bottom p-3" style="min-width: 60px;">Qty</th>
                                                <th scope="col" class="border-bottom p-3" style="min-width: 130px;">Rate</th>
                                                <th scope="col" class="border-bottom p-3" style="min-width: 130px;">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-start p-3">1</th>
                                                <td class="text-start p-3">Hospital Charges</td>
                                                <td class="text-center p-3">1</td>
                                                <td class="p-3">$ 125</td>
                                                <td class="p-3">$ 125</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start p-3">2</th>
                                                <td class="text-start p-3">Medicine</td>
                                                <td class="text-center p-3">1</td>
                                                <td class="p-3">$ 245</td>
                                                <td class="p-3">$ 245</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start p-3">3</th>
                                                <td class="text-start p-3">Special Visit Fee(Doctor)</td>
                                                <td class="text-center p-3">1</td>
                                                <td class="p-3">$ 150</td>
                                                <td class="p-3">$ 150</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-5 ms-auto">
                                        <ul class="list-unstyled h6 fw-normal mt-4 mb-0 ms-md-5 ms-lg-4">
                                            <li class="text-muted d-flex justify-content-between pe-3">Subtotal :<span>$ 520</span></li>
                                            <li class="text-muted d-flex justify-content-between pe-3">Taxes :<span> 0</span></li>
                                            <li class="d-flex justify-content-between pe-3">Total :<span>$ 520</span></li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div class="border-top pt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="text-sm-start text-muted text-center">
                                            <small class="mb-0">Customer Services : <a href="tel:+152534-468-854" class="text-warning">(+12) 1546-456-856</a></small>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-sm-6">
                                        <div class="text-sm-end text-muted text-center">
                                            <small class="mb-0"><a href="#" class="text-primary">Terms & Conditions</a></small>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>

                        <!-- <div class="text-end mt-4 pt-2">
                            <a href="javascript:window.print()" class="btn btn-soft-primary d-print-none"><i class="uil uil-print"></i> Print</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- View Invoice End -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Your script file -->
        <script src="path/to/your/script.js"></script>

        <script>

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click','.AppointmentDetails',function(e){
                e.preventDefault();
                var appointment_id =$(this).val();
                //console.log(appointment_id);
                $('#exampleModal').modal('show');
                $.ajax({
                    url: "/getappointmentdetails/"+appointment_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                       console.log(data);

                       $('#viewPatientName').text(data.appointment.PatientName);
                       $('#viewEmail').text(data.appointment.PatientEmail);
                       $('#viewPhone').text(data.appointment.PatientPhone);


                       $('#viewDoctorFName').text(data.doctorname.Fname);
                       $('#viewDoctorLName').text(data.doctorname.Lname);
                       $('#viewDepartment').text(data.appointment.Department);
                       $('#viewTime').text(data.appointment.Time);

                       $('#viewStates').text(data.appointment.States);
                       $('#catagory').text(data.appointment.Department);


                    var originalTimestamp1 = data.appointment.created_at;
                    var originalTimestamp2 = data.appointment.updated_at;

                    var date1 = new Date(originalTimestamp1);
                    var date2 = new Date(originalTimestamp2);

                    var year1 = date1.getFullYear();
                    var month1 = String(date1.getMonth() + 1).padStart(2, '0');
                    var day1 = String(date1.getDate()).padStart(2, '0');

                    var year2 = date2.getFullYear();
                    var month2 = String(date2.getMonth() + 1).padStart(2, '0');
                    var day2 = String(date2.getDate()).padStart(2, '0');

                    var formattedDate1 = year1 + '-' + month1 + '-' + day1;
                    var formattedDate2 = year2 + '-' + month2 + '-' + day2;

                    $('#viewIssuedate').text(formattedDate1);
                    $('#viewDuedate').text(formattedDate2);


                    },
                    error: function() {
                        alert('Error loading data.');
                    }
                });

            });


            $(document).ready(function() {
                $('.view-appointment').click(function() {
                    var appointmentData = $(this).data('appointment');
                    var appointment = JSON.parse(appointmentData);

                    var detailsHtml = `
                        <p><strong>Department:</strong> ${appointment.Department}</p>
                        <p><strong>Doctor:</strong> Dr.${appointment.Doctor}</p>
                        <p><strong>Date:</strong> ${appointment.Date}</p>
                        <p><strong>States:</strong> ${appointment.States}</p>
                        <!-- Add more appointment details here -->
                    `;

                    $('#appointment-details').html(detailsHtml);
                });
            });
        </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/home.blade.php ENDPATH**/ ?>