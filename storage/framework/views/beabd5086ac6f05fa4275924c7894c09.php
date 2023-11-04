<?php $__env->startSection('AdminContent'); ?>

<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">Patients List</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Patients</li>
                </ul>
            </nav>
        </div>
<div class="col-md-12">
    <?php if(session('erors')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e(session('erors')); ?>

        </div>
    <?php endif; ?>
</div>
        <div class="row">
            <div class="col-12 mt-4">
                <div class="table-responsive shadow rounded">
                    <table class="table table-center bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom p-3" style="min-width: 50px;">Id</th>
                                <th class="border-bottom p-3" style="min-width: 180px;">Name</th>
                                <th class="border-bottom p-3">Age</th>
                                <th class="border-bottom p-3">Gender</th>
                                <th class="border-bottom p-3">Address</th>
                                <th class="border-bottom p-3">Mobile No.</th>
                                <th class="border-bottom p-3">Department</th>
                                <th class="border-bottom p-3" style="min-width: 150px;">Date</th>
                                <th class="border-bottom p-3">Time</th>
                              
                                <th class="border-bottom p-3" style="min-width: 100px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                            <tr>
                            

                                <th class="p-3"><?php echo e($patient->id); ?></th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo e(asset('public/avatar/' . $patient->avatar)); ?>" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="ms-2"><?php echo e($patient->fname); ?> <?php echo e($patient->lname); ?></span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3"><?php echo e($patient->age); ?></td>
                                <td class="p-3"><?php echo e($patient->gender); ?></td>
                                <td class="p-3"><?php echo e($patient->address); ?></td>
                                <td class="p-3"><?php echo e($patient->p_number); ?></td>
                                <td class="p-3"><?php echo e($patient->type); ?></td>
                                <td class="p-3">20th Dec 2020</td>
                                <td class="p-3">11:00AM</td>
                               
                                <td class="text-end p-3">
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewprofile<?php echo e($patient->id); ?>"><i class="uil uil-eye"></i></a>
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#editprofile<?php echo e($patient->id); ?>"><i class="uil uil-pen"></i></a>
                                    <a href="<?php echo e(route('patients.delete',$patient->id)); ?>" class="btn btn-icon btn-pills btn-soft-danger" onclick="return confirm('Sure Want Delete?')"><i class="uil uil-trash"></i></a>
                                </td>
                                     

                            </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end row-->

        <div class="row text-center">
            <!-- PAGINATION START -->
            <div class="col-12 mt-4">
                <div class="d-md-flex align-items-center text-center justify-content-between">
                    <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                    <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                    </ul>
                </div>
            </div><!--end col-->
            <!-- PAGINATION END -->
        </div><!--end row-->
    </div>
</div><!--end container-->



    <!-- Modal start -->
        <!-- Profile Settings Start -->
         <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="editprofile<?php echo e($patient->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Profile Settings</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-4">
                                <img src="assets/images/doctors/01.jpg" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                            </div><!--end col-->

                            

                            <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                                <a href="#" class="btn btn-primary">Upload</a>
                                <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                            </div><!--end col-->
                        </div><!--end row-->

                      <form class="mt-4" method="post" action="<?php echo e(route('user.update', ['userId' => $patient->id])); ?>">
                                           <?php echo csrf_field(); ?>
                                           
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input name="fname" id="fname" type="text" class="form-control" placeholder="First Name :" value="<?php echo e($patient->fname); ?>">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input name="lname" id="lname" type="text" class="form-control" placeholder="Last Name :" value="<?php echo e($patient->lname); ?>">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email :"value="<?php echo e($patient->email); ?>">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone no.</label>
                                        <input name="p_number" id="p_number" type="text" class="form-control" placeholder="Phone no. :"value="<?php echo e($patient->p_number); ?>">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Bio Here</label>
                                        <textarea name="overview" id="overview" rows="4" class="form-control" placeholder="Bio :" value="<?php echo e($patient->overview); ?>"></textarea>
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
            </div>
        </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Profile Settings End -->

        <!-- Profile Start -->
        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="viewprofile<?php echo e($patient->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel1">Profile</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset('public/avatar/' . $patient->avatar)); ?>" class="avatar avatar-small rounded-pill" alt="">
                            <h5 class="mb-0 ms-3"><?php echo e($patient->fname); ?> <?php echo e($patient->lname); ?></h5>
                        </div>
                        <ul class="list-unstyled mb-0 d-md-flex justify-content-between mt-4">
                            <li>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex">
                                        <h6>Age:</h6>
                                        <p class="text-muted ms-2"><?php echo e($patient->age); ?> year old</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6>Gender:</h6>
                                        <p class="text-muted ms-2"><?php echo e($patient->gender); ?></p>
                                    </li>

                                    <li class="d-flex">
                                        <h6 class="mb-0">Department:</h6>
                                        <p class="text-muted ms-2 mb-0"><?php echo e($patient->type); ?></p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex">
                                        <h6>Date:</h6>
                                        <p class="text-muted ms-2">20th Dec 2020</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6>Time:</h6>
                                        <p class="text-muted ms-2">11:00 AM</p>
                                    </li>

                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- Profile End -->
        <!-- Modal end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.inc.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/admin/patients.blade.php ENDPATH**/ ?>