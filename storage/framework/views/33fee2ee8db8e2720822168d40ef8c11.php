<?php $__env->startSection('AdminContent'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#avatar').change(function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#avatar-preview').attr('src', e.target.result).show();
            };
            reader.readAsDataURL(file);
        } else {
            $('#avatar-preview').hide().attr('src', '#');
        }
    });
});
</script>

<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">Doctor Profile & Settings</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('doctors.view')); ?>">Doctris</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ul>
            </nav>
        </div>
<div class="col-md-12">
    <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
</div>
        <div class="card rounded shadow overflow-hidden mt-4 border-0">
            <div class="p-5 bg-primary bg-gradient"></div>
            <div class="avatar-profile d-flex margin-nagative mt-n5 position-relative ps-3">
                <img src="<?php echo e(asset('public/avatar/' . $user->avatar)); ?>" class="rounded-circle shadow-md avatar avatar-medium" alt="">
                <div class="mt-4 ms-3 pt-3">
                    <h5 class="mt-3 mb-1"><?php echo e($user->fname); ?> <?php echo e($user->lname); ?></h5>
                    <p class="text-muted mb-0"><?php echo e($user->type); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-4">
                    <div class="card border-0 rounded-0 p-4">
                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded shadow overflow-hidden bg-light" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded-0 active" id="overview-tab" data-bs-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h5 class="mb-0">Overview</h5>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->

                            <li class="nav-item">
                                <a class="nav-link rounded-0" id="settings-tab" data-bs-toggle="pill" href="#pills-settings" role="tab" aria-controls="pills-settings" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h5 class="mb-0">Settings</h5>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul><!--end nav pills-->

                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="overview-tab">
                                <p class="text-muted"><?php echo e($user->overview); ?></p>

                                <h6 class="mb-0">Specialties: </h6>

                                <ul class="list-unstyled mt-4">
                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i><?php echo e($user->type); ?></li>
                                   
                                </ul>

                            </div><!--end teb pane-->


                            <div class="tab-pane fade" id="pills-settings" role="tabpanel" aria-labelledby="settings-tab">
                                <h5 class="mb-1">Settings</h5>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="rounded shadow mt-4">
                                            <div class="p-4 border-bottom">
                                                <h6 class="mb-0">Personal Information :</h6>
                                            </div>

                                            <div class="p-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-4">
                                                        <img src="<?php echo e(asset('public/avatar/' . $user->avatar)); ?>" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                                                    </div><!--end col-->

                                                     <div class="col-lg-2 col-md-4">
                            <img src="#" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="Preview" id="avatar-preview" style="display: none; max-width: 600px;">
                        </div><!--end col-->
                                                    <div class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                                                        <h6 class="">Upload your picture</h6>
                                                      
                                                    </div><!--end col-->
                                        <form class="mt-4" method="post" action="<?php echo e(route('avatars.manage', ['userId' => $user->id])); ?>">
                                                 <?php echo csrf_field(); ?>


                                                    <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                                                     <input type="file" name="avatar"
                                                                            class="form-control" required  id="avatar">
                                                          <input type="submit" id="submit"  class="btn btn-primary" value="Save changes">
                                                      
                                                    </div><!--end col-->
                                                     </form>
                                                </div><!--end row-->

                                                <form class="mt-4" method="post" action="<?php echo e(route('user.update', ['userId' => $user->id])); ?>">
                                                 <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">First Name</label>
                                                                <input name="fname" id="fname" type="text" class="form-control" placeholder="First Name :" value="<?php echo e($user->fname); ?>">
                                                            </div>
                                                        </div><!--end col-->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Last Name</label>
                                                                <input name="lname" id="lname" type="text" class="form-control" placeholder="Last Name :" value="<?php echo e($user->lname); ?>">
                                                            </div>
                                                        </div><!--end col-->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Your Email</label>
                                                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" value="<?php echo e($user->email); ?>">
                                                            </div>
                                                        </div><!--end col-->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Phone no.</label>
                                                                <input name="p_number" id="p_number" type="text" class="form-control" placeholder="Phone no. :" value="<?php echo e($user->p_number); ?>">
                                                            </div>
                                                        </div><!--end col-->

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Your Bio Here</label>
                                                               <textarea name="overview" id="overview" rows="4" class="form-control" placeholder="Bio :"><?php echo e($user->overview); ?></textarea>

                                                            </div>
                                                        </div>
                                                    </div><!--end row-->

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" id="submit"  class="btn btn-primary" value="Save changes">
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </form><!--end form-->
                                            </div>
                                        </div>

                                        <div class="rounded shadow mt-4">
                                            <div class="p-4 border-bottom">
                                                <h6 class="mb-0">Account Notifications :</h6>
                                            </div>

                                            <div class="p-4">
                                               <form class="mt-4" method="post" action="<?php echo e(route('pass.update', ['userId' => $user->id])); ?>">
                                                               <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                       

                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">New password :</label>
                                                                <input type="password" name="password" class="form-control" placeholder="New password" required="">
                                                            </div>
                                                        </div><!--end col-->

                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Re-type New password :</label>
                                                               <input type="password" name="current_password" class="form-control" placeholder="Current password" required="">
                                                            </div>
                                                        </div><!--end col-->

                                                        <div class="col-lg-12 mt-2 mb-0">
                                                            <button class="btn btn-primary" type="submit">Save password</button>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </form>
                                            </div>
                                        </div>
                                    </div><!--end col-->


                                </div><!--end row-->
                            </div><!--end teb pane-->
                        </div><!--end tab content-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div>
</div><!--end container-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.inc.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/admin/dr-profile.blade.php ENDPATH**/ ?>