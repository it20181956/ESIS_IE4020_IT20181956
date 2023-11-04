<?php $__env->startSection('AdminContent'); ?>

<div class="container-fluid">
    <div class="layout-specing">
        <div class="row">
            <div class="col-xl-9 col-md-6">
                <h5 class="mb-0">Doctors</h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                    </ul>
                </nav>
            </div><!--end col-->

            <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
                <a href="<?php echo e(route('admin.add-doctor')); ?>" class="btn btn-primary">Add New Doctor</a>
            </div><!--end col-->
        </div><!--end row-->

<div class="row row-cols-md-2 row-cols-lg-5">
<?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        

            <div class="col mt-4">
                <div class="card team border-0 rounded shadow overflow-hidden">

                    <div class="team-img position-relative">
                        <img src="<?php echo e(asset('public/avatar/' . $doctor->avatar)); ?>" class="img-fluid" alt="">
                        <ul class="list-unstyled team-social mb-0">
                            <li><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                            <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                            <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="instagram" class="icons"></i></a></li>
                            <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content text-center">
                        <a href="<?php echo e(route('admin.docter-prof', ['docId' => $doctor->id])); ?>" class="title text-dark h5 d-block mb-0"><?php echo e($doctor->fname); ?> <?php echo e($doctor->lname); ?></a>
                        <small class="text-muted speciality"><?php echo e($doctor->type); ?></small>
                    </div>
                </div>
            </div><!--end col-->

       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          




          


        </div><!--end row-->
    </div>
</div><!--end container-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.inc.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/admin/doctors.blade.php ENDPATH**/ ?>