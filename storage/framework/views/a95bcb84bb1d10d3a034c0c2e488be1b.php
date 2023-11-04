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



            <div class="col-md-12"> <?php if(session('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?></div>

<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">Add New Doctor</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('doctors.view')); ?>">Doctris</a></li>
                   
                    <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
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
        <div class="row">
            <div class="col-lg-12 mt-4">
                <div class="card border-0 p-4 rounded shadow">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4">
                            <img src="#" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="Preview" id="avatar-preview" style="display: none; max-width: 600px;">
                        </div><!--end col-->
<!--<img id="avatar-preview" src="#" alt="Preview" style="display: none; max-width: 100px;">-->
                       

                        <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                    
                        </div><!--end col-->
                    </div><!--end row-->







                  <form class="mt-4" method="post" action="<?php echo e(route('docter.store')); ?>"enctype="multipart/form-data">

                     <?php echo csrf_field(); ?>
                        <div class="row">
                            
                           <div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">Profile Pic</label>
        <input name="avatar" id="avatar" type="file" class="form-control" placeholder="">
    </div>
    
</div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input name="fname" id="fname" type="text" class="form-control" placeholder="First Name :">
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input name="lname" id="lname" type="text" class="form-control" placeholder="Last Name :">
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Email</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone no.</label>
                                    <input name="p_number" id="p_number" type="text" class="form-control" placeholder="Phone no. :">
                                </div>
                            </div><!--end col-->

                             <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <input name="overview" id="overview" type="text" class="form-control" placeholder="OverView">
                                </div>
                            </div><!--end col-->



                <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <select class="form-select form-control" name="role">
                                        
                                        <option value="doctor">Docters</option>
                                      
                                    </select>
                                </div>
                            </div><!--end col-->
                            
                            
                            
                             <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Docter Category</label>
                                    <select class="form-select form-control" name="type">
                                        
                                        <option value="Anesthesiologists">Anesthesiologists</option>
                                          <option value="Cardiologists">Cardiologists</option>
                                            <option value="Endocrinologists">Endocrinologists</option>
                                              <option value="Gastroenterologists">Gastroenterologists</option>
                                                <option value="Hematologists">Hematologists</option>
                                      
                                    </select>
                                </div>
                            </div><!--end col-->

 <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input name="password" id="password" type="password" class="form-control" placeholder="pw. :">
                                </div>
                            </div><!--end col-->


                          <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input name="password_confirmation" id="password" type="password" class="form-control" placeholder="Confirm Pw. :">
                                </div>
                            </div><!--end col-->
</div>

                        <button type="submit" class="btn btn-primary">Add Doctor</button>
                    </form>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</div><!--end container-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.inc.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/admin/add-doctor.blade.php ENDPATH**/ ?>