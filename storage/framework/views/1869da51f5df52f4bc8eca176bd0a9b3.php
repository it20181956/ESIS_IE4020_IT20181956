<?php $__env->startSection('AdminContent'); ?>

<div class="container-fluid">
    <div class="layout-specing">
        <div class="row">
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <div class="col-xl-9 col-lg-6 col-md-4">
                <h5 class="mb-0">Appointment</h5>
            </div><!--end col-->

            <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                <div class="justify-content-md-end">
                </div>
            </div><!--end col-->
            <table id="dataTable" style="width=50%">
                <thead>
                    <tr>
                        <th class="border-bottom p-3" >#</th>
                        <th class="border-bottom p-3" >Patient Name</th>
                        <th class="border-bottom p-3">Department</th>
                        <th class="border-bottom p-3" >Date</th>
                        <th class="border-bottom p-3" >Doctor</th>
                        <th class="border-bottom p-3">Fees</th>
                        <th class="border-bottom p-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $Appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $Appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th class="p-3"><?php echo e($key+1); ?></th>
                                <td class="p-3">
                                    <?php echo e($Appointment->PatientName); ?>

                                </td>
                                <td class="p-3"><?php echo e($Appointment->Department); ?></td>
                                <td class="p-3"><?php echo e($Appointment->Date); ?></td>
                                <td class="p-3">
                                    Dr.<?php echo e($Appointment->doctor->fname ?? 'N/A'); ?> <?php echo e($Appointment->doctor->lname ?? 'N/A'); ?>

                                </td>
                                <td class="p-3"><?php echo e($Appointment->States); ?></td>
                                <td class="text-end p-3">
                                    <a class="btn btn-icon btn-pills btn-soft-primary"  href="<?php echo e(route('Get.Appointment.Details.admin', ['id' => $Appointment->id])); ?>" ><iconify-icon icon="uil:eye"></iconify-icon></a>
                                    <a  class="btn btn-icon btn-pills btn-soft-success"  href="<?php echo e(route('accept.Appointment', ['id' => $Appointment->id])); ?>" ><iconify-icon icon="uil:check-circle"></iconify-icon></a>
                                    <a class="btn btn-icon btn-pills btn-soft-danger"  href="<?php echo e(route('cancel.Appointment', ['id' => $Appointment->id])); ?>" ><iconify-icon icon="uil:times"></iconify-icon></a>
                                </td>
                            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
                </tbody>
            </table>
        </div><!--end row-->
    </div>
</div><!--end container-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.inc.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/admin/appointment.blade.php ENDPATH**/ ?>