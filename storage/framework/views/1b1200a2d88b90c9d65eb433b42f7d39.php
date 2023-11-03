<?php $__env->startSection('AdminContent'); ?>


<div class="container-fluid">
    <div class="layout-specing">
        <h5 class="mb-0">Dashboard</h5>

        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-4 mt-4">
                <div class="card features feature-primary rounded border-0 shadow p-4">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-md">
                            <i class="uil uil-bed h3 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-2">
                            <h5 class="mb-0"><?php echo e($patientCount); ?></h5>
                            <p class="text-muted mb-0">Patients</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

        

            <div class="col-xl-4 col-lg-4 col-md-4 mt-4">
                <div class="card features feature-primary rounded border-0 shadow p-4">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-md">
                            <i class="uil uil-social-distancing h3 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-2">
                            <h5 class="mb-0"><?php echo e($doctorCount); ?></h5>
                            <p class="text-muted mb-0">Docters</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

    
            <div class="col-xl-4 col-lg-4 col-md-4 mt-4">
                <div class="card features feature-primary rounded border-0 shadow p-4">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-md">
                            <i class="uil uil-medkit h3 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-2">
                            <h5 class="mb-0"><?php echo e($appointmentCount); ?></h5>
                            <p class="text-muted mb-0">Appointment</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

           
        </div><!--end row-->
    </div>
</div><!--end container-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.inc.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/admin/index.blade.php ENDPATH**/ ?>