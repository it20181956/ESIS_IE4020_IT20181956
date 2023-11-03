<?php $__env->startSection('AdminContent'); ?>

<div class="container-fluid">
    <div class="layout-specing">
        <div class="row">
            <div class="col-xl-9 col-lg-6 col-md-4">
                <h5 class="mb-0">Appointment</h5>
            </div><!--end col-->

            <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                <div class="justify-content-md-end">
                </div>
            </div><!--end col-->

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
                                                                    <li class="d-flex">
                                                                        <small class="mb-0 text-muted">Invoice no. : </small>
                                                                        <small class="mb-0 text-dark">&nbsp;&nbsp;#54638990jnn</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Patient Name : </small>
                                                                        <small class="mb-0" id="viewPatientName" ><?php echo e($appointment->PatientName); ?> </small>
                                                                    </li>

                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Email : </small>
                                                                        <small class="mb-0"id="viewEmail"><?php echo e($appointment->PatientEmail); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Phone : </small>
                                                                        <small class="mb-0" id="viewPhone"><?php echo e($appointment->PatientPhone); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">

                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Doctor Name : </small>
                                                                        <small class="mb-0" id="viewDoctorFName"></small>&nbsp;<small class="mb-0" id="viewDoctorLName"> <?php echo e($appointmentDoctorname['Fname']); ?> <?php echo e($appointmentDoctorname['Lname']); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Department : </small>
                                                                        <small class="mb-0" id="viewDepartment"><?php echo e($appointment->Department); ?></small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <small class="mb-0 text-muted">Time : </small>
                                                                        <small class="mb-0" id="viewTime" ><?php echo e($appointment->Time); ?></small>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->

                                                        <div class="pt-4 border-top">
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-6">
                                                                    <h5 class="text-muted fw-bold">Invoice <span class="badge rounded-pill bg-soft-success fw-normal ms-2" id="viewStates"></span></h5>
                                                                    <h6 id="catagory"><?php echo e($appointment->States); ?></h6>

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
                                    </div>
                                </div>


        </div><!--end row-->
    </div>
</div><!--end container-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.inc.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/admin/appointmentview.blade.php ENDPATH**/ ?>