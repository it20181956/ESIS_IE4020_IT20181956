<?php $__env->startSection('content'); ?>
        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100" style="background: url('assets/images/bg/about.jpg') center center;">
            <div class="bg-overlay bg-overlay-dark"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="sub-title mb-4 text-white title-dark">Doctors team</h3>
                            <p class="para-desc mx-auto text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>

                            <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                                <ul class="breadcrumb bg-transparent mb-0">
                                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                    <li class="breadcrumb-item"><a href="#">Doctors</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Team one</li>
                                </ul>
                            </nav>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="card team border-0 rounded shadow overflow-hidden">
                            <div class="team-img position-relative">
                                <img src="<?php echo e(asset('public/avatar/' . $doctor->avatar)); ?>" class="img-fluid" alt="">
                                <ul class="list-unstyled team-social mb-0">
                                    <li><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content text-center">
                                <a href="#" class="title text-dark h5 d-block mb-0"><?php echo e($doctor->fname); ?> <?php echo e($doctor->lname); ?></a>
                                <small class="text-muted speciality"><?php echo e($doctor->type); ?></small>
                            </div>
                        </div>
                    </div><!--end col-->

                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   


                 



                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/doctor-team-one.blade.php ENDPATH**/ ?>