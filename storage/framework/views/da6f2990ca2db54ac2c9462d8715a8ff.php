

<?php $__env->startSection('content'); ?>

<!-- Start -->
        <section class="bg-hero">
            <div class="container">
                <div class="row mt-lg-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="rounded shadow overflow-hidden sticky-bar">
                            <div class="card border-0">
                                <img src="assets/images/bg/bg-profile.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="text-center avatar-profile margin-nagative mt-n5 position-relative pb-4 border-bottom">
                                <img src="assets/images/client/09.jpg" class="rounded-circle shadow-md avatar avatar-md-md" alt="">
                                <h5 class="mt-3 mb-1">Christopher Burrell</h5>
                                <p class="text-muted mb-0">25 Years old</p>
                            </div>

                            <div class="list-unstyled p-4">
                                <div class="progress-box mb-4">
                                    <h6 class="title">Complete your profile</h6>
                                    <div class="progress">
                                        <div class="progress-bar position-relative bg-primary" style="width:89%;">
                                            <div class="progress-value d-block text-muted h6">89%</div>
                                        </div>
                                    </div>
                                </div><!--end process box-->

                                <div class="d-flex align-items-center mt-2">
                                    <i class="uil uil-user align-text-bottom text-primary h5 mb-0 me-2"></i>
                                    <h6 class="mb-0">Gender</h6>
                                    <p class="text-muted mb-0 ms-2">Female</p>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <i class="uil uil-envelope align-text-bottom text-primary h5 mb-0 me-2"></i>
                                    <h6 class="mb-0">Birthday</h6>
                                    <p class="text-muted mb-0 ms-2">19th January 1995</p>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <i class="uil uil-book-open align-text-bottom text-primary h5 mb-0 me-2"></i>
                                    <h6 class="mb-0">Phone No.</h6>
                                    <p class="text-muted mb-0 ms-2">+(125) 458-8547</p>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <i class="uil uil-italic align-text-bottom text-primary h5 mb-0 me-2"></i>
                                    <h6 class="mb-0">Address</h6>
                                    <p class="text-muted mb-0 ms-2">Sydney, Australia</p>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <i class="uil uil-medical-drip align-text-bottom text-primary h5 mb-0 me-2"></i>
                                    <h6 class="mb-0">Blood Group</h6>
                                    <p class="text-muted mb-0 ms-2">B +</p>
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
                                            <h4 class="title fw-normal mb-0">Invoice</h4>
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
                                    <div class="row">
                                        <div class="col-lg-12 col-12 mt-4">                                            
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
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Patient Name : </small>
                                                                        <small class="mb-0" id="viewPatientName" > <?php echo e($appointment->PatientName); ?> </small>
                                                                    </li>

                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Email : </small>
                                                                        <small class="mb-0"id="viewEmail"> <?php echo e($appointment->PatientEmail); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Phone : </small>
                                                                        <small class="mb-0" id="viewPhone"> <?php echo e($appointment->PatientPhone); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Comments : </small>
                                                                        <small class="mb-0" id="viewTime" > <?php echo e($appointment->TiCommentsme); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">

                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Doctor Name : </small>
                                                                        <small class="mb-0" id="viewDoctorFName"></small>&nbsp;<small class="mb-0" id="viewDoctorLName"> <?php echo e($appointmentDoctorname['Fname']); ?> <?php echo e($appointmentDoctorname['Lname']); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Department : </small>
                                                                        <small class="mb-0" id="viewDepartment"> <?php echo e($appointment->Department); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Time : </small>
                                                                        <small class="mb-0" id="viewTime" > <?php echo e($appointment->Time); ?></small>
                                                                    </li>
                                                                    
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->

                                                        <div class="pt-4 border-top">
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-6">
                                                                    <h5 class="text-muted fw-bold">Invoice <span class="badge rounded-pill bg-soft-success fw-normal ms-2" id="viewStates"></span></h5>
                                                                    <h6 id="catagory"> <?php echo e($appointment->States); ?></h6>

                                                                    <ul class="list-unstyled">
                                                                        <li class="d-flex mt-2">
                                                                            <small class="mb-0 text-muted">Issue Dt. : <?php echo e($appointment->Date); ?> </small>
                                                                            <small class="mb-0 text-dark" id="viewIssuedate"></small>
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
                                                                            
                                                                        </div>
                                                                    </div><!--end col-->

                                                                    <div class="col-sm-6">
                                                                        <div class="text-sm-end text-muted text-center">
                                                                            <?php if($appointment->States == 'Accepted'): ?>
                                                                                <form action="../session" method="POST">
                                                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            
                                                                                <input type='hidden' name="appointmentId" value="<?php echo e($appointment->id); ?>">
                                                                                <input type='hidden' name="total" value="520">
                                                                                <input type='hidden' name="productname" value="Payment for ABC Hospital Appointment Bill">
                                                                                
                                                                                <button class="btn btn-success" type="submit" id="checkout-live-button"><iconify-icon icon="ic:round-payment"></iconify-icon> Pay</button>
                                                                                </form>
                                                                            <?php endif; ?>
                                                                            <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
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
                                            <img src="assets/images/client/09.jpg" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                                        </div><!--end col-->

                                        <div class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                                            <h6 class="">Upload your picture</h6>
                                            <p class="text-muted mb-0">For best results,  an image at least 256px by 256px in either .jpg or .png format</p>
                                        </div><!--end col-->

                                        <div class="col-lg-5 col-md-12 text-lg-right text-center mt-4 mt-lg-0">
                                            <a href="#" class="btn btn-primary">Upload</a>
                                            <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <form class="mt-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">First Name</label>
                                                    <input name="name" id="name" type="text" class="form-control" placeholder="First Name :">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Last Name</label>
                                                    <input name="name" id="name2" type="text" class="form-control" placeholder="Last Name :">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email</label>
                                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone no.</label>
                                                    <input name="number" id="number" type="text" class="form-control" placeholder="Phone no. :">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Bio Here</label>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Bio :"></textarea>
                                                </div>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save changes">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->

                                    <div class="mt-4 pt-2">
                                        <h5 class="mb-0">Change Password :</h5>

                                        <form class="mt-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Old password :</label>
                                                        <input type="password" class="form-control" placeholder="Old password" required="">
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">New password :</label>
                                                        <input type="password" class="form-control" placeholder="New password" required="">
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Re-type New password :</label>
                                                        <input type="password" class="form-control" placeholder="Re-type New password" required="">
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-12 mt-2 mb-0">
                                                    <button class="btn btn-primary">Save password</button>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/patient-invoice-dashboard.blade.php ENDPATH**/ ?>