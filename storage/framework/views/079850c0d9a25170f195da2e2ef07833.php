

<?php $__env->startSection('content'); ?>



        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100" id="home">
            <div class="bg-overlay bg-overlay-dark"></div>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-xl-10">

                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::has('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('error')); ?>

                            </div>
                        <?php endif; ?>


                        <div class="heading-title text-center">
                            <img src="assets/images/logo-icon.png" height="50" alt="">
                            <h4 class="heading fw-bold text-white title-dark mt-3 mb-4">Booking Your Appointments</h4>
                            <p class="para-desc mx-auto text-white-50 mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>

                            <div class="mt-4 pt-2">
                                <form class="rounded text-start shadow p-4 bg-white-50" action="<?php echo e(route('Check.Availability')); ?>" method="post" enctype="multipart/form">
                                    <?php echo csrf_field(); ?>
                                    <div class="row align-items-center">
                                        <div class="col-md">
                                            <div class="input-group bg-white border rounded" style="opacity: 0.7;">
                                                <span class="input-group-text border-0"><i class="fas fa-calendar-alt text-primary h5 fw-normal mb-0"></i></span>
                                                <input name="date" type="text" class="form-control start" placeholder="Select date :" required >
                                            </div>
                                        </div><!--end col-->

                                        

                                        <div class="col-md mt-4 mt-sm-0">
                                            <div class="input-group bg-white border rounded" style="opacity: 0.7;">
                                                <span class="input-group-text border-0"><i class="ri-user-2-line text-primary h5 fw-normal mb-0"></i></span>
                                                <select class="form-select form-control" name="doctor" required>
                                                    <option value="">Select Doctor</option>
                                                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($doctor->id); ?>">Dr. <?php echo e($doctor->fname); ?> <?php echo e($doctor->lname); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-auto mt-4 mt-sm-0">
                                            <div class="d-grid d-md-block">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex">
                            <i class="uil uil-briefcase h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Our Mission</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="d-flex">
                            <i class="uil uil-airplay h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Our Vision</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="d-flex">
                            <i class="uil uil-flip-v h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Who We Are ?</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="position-relative">
                            <img src="assets/images/about/about-2.png" class="img-fluid" alt="">
                            <div class="play-icon">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox video-play-icon">
                                    <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ms-lg-5">
                            <span class="badge rounded-pill bg-soft-primary">About Doctris</span>
                            <h4 class="title mt-3 mb-4">Good Services And Better <br> Health By Our Specialists</h4>
                            <p class="para-desc text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                            <p class="para-desc text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words.</p>
                            <div class="mt-4">
                                <a href="aboutus.html" class="btn btn-soft-primary">Read More</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <span class="badge rounded-pill bg-soft-primary mb-3">Departments</span>
                            <h4 class="title mb-4">Our Medical Services</h4>
                            <p class="text-muted mx-auto para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="ri-eye-fill h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Eye Care</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>

                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="ri-psychotherapy-fill h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Psychotherapy</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>

                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="ri-stethoscope-fill h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Primary Care</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>

                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="ri-capsule-fill h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Dental Care</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>

                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="ri-microscope-fill h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Orthopedic</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>

                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="ri-pulse-fill h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Cardiology</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>

                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="ri-empathize-fill h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Gynecology</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>

                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="ri-mind-map h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Neurology</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>

                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <!-- Cta Start -->
            <div class="container-fluid mt-100 mt-60">
                <div class="py-5 rounded" style="background: url('assets/images/bg/05.jpg') center left;">
                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-8 offset-md-6 col-lg-4 col-md-6">
                                <div class="cta-review bg-primary shadow-md mb-lg-4 rounded p-4 py-5">
                                    <div class="client-review-slider">
                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>

                                            <div class="d-inline-flex align-items-center">
                                                <img src="assets/images/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Thomas Israel <small class="text-white-50 d-block">C.E.O</small></h6>
                                            </div>
                                        </div><!--end customer testi-->

                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>

                                            <div class="d-inline-flex align-items-center">
                                                <img src="assets/images/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Carl Oliver <small class="text-white-50 d-block">P.A</small></h6>
                                            </div>
                                        </div><!--end customer testi-->

                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. "</p>

                                            <div class="d-inline-flex align-items-center">
                                                <img src="assets/images/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Barbara McIntosh <small class="text-white-50 d-block">M.D</small></h6>
                                            </div>
                                        </div><!--end customer testi-->

                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero in 45 BC. Allegedly, a Latin scholar established the origin of the text by compiling all the instances of the unusual word 'consectetur' he could find "</p>

                                            <div class="d-inline-flex align-items-center">
                                                <img src="assets/images/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Christa Smith <small class="text-white-50 d-block">Manager</small></h6>
                                            </div>
                                        </div><!--end customer testi-->

                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>

                                            <div class="d-inline-flex align-items-center">
                                                <img src="assets/images/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Dean Tolle <small class="text-white-50 d-block">Developer</small></h6>
                                            </div>
                                        </div><!--end customer testi-->

                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. "</p>

                                            <div class="d-inline-flex align-items-center">
                                                <img src="assets/images/client/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Jill Webb <small class="text-white-50 d-block">Designer</small></h6>
                                            </div>
                                        </div><!--end customer testi-->
                                    </div><!--end carousel-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
            </div><!--end container-->
        </section>
        <!-- End -->

        <section class="pt-md-0 cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row mt-4">
                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="assets/images/client/amazon.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="assets/images/client/google.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="assets/images/client/lenovo.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="assets/images/client/paypal.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="assets/images/client/shopify.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="assets/images/client/spotify.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="section">
            <div class="container mt-100 mt-60">
                <div class="row align-items-lg-end">
                    <div class="col-md-6">
                        <div class="me-xl-3">
                            <div class="section-title mb-4 pb-2">
                                <i class="uil uil-notes text-primary h2"></i>
                                <h4 class="title mb-4">Book Your Appointment</h4>
                                <p class="text-muted para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                            </div>

                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden">
                                <i class="uil uil-stethoscope-alt icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Success Of Treatment</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="uil uil-stethoscope-alt"></i>
                                </div>
                            </div>

                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                                <i class="uil uil-microscope icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Modern Technology</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="uil uil-microscope"></i>
                                </div>
                            </div>

                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                                <i class="uil uil-user-md icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Certified Doctors</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="uil uil-user-md"></i>
                                </div>
                            </div>
                        </div>
                    </div><!--end col   -->
                    <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 rounded shadow p-4 ms-xl-3">
                            <div class="custom-form">
                                <form action="<?php echo e(route('Check.Appointment')); ?>" method="post" enctype="multipart/form">
                                    <?php echo csrf_field(); ?>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Patient Name <span class="text-danger">*</span></label>
                                                <input name="name" id="name1" type="text" class="form-control" placeholder="Patient Name :" required>
                                            </div>
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Departments</label>
                                                <select class="form-select form-control" name="departments" required>
                                                    <option value="Eye Care">Eye Care</option>
                                                    <option value="Gynecologist">Gynecologist</option>
                                                    <option value="Psychotherapist">Psychotherapist</option>
                                                    <option value="Dentist">Dentist</option>
                                                    <option value="Gastrologist">Gastrologist</option>
                                                    <option value="Neurologist">Neurologist</option>
                                                </select>
                                                <?php $__errorArgs = ['departments'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Doctor</label>
                                                <select class="form-select form-control" name="doctor" required>
                                                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($doctor->id); ?>">Dr. <?php echo e($doctor->fname); ?> <?php echo e($doctor->lname); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php $__errorArgs = ['doctor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required>
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                                <input name="phone" id="phone" type="tel" class="form-control" placeholder="Your Phone :" required>
                                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"> Date <span class="text-danger">*</span></label>
                                                <input name="date" type="date" class="form-control start" placeholder="Select date :" required>
                                                <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="input-time">Time <span class="text-danger">*</span></label>
                                                <select class="form-select form-control" name="time" required>
                                                    <option value="02.00">02.00 PM</option>
                                                    <option value="02.30">02.30 PM</option>
                                                    <option value="03.00">03.00 PM</option>
                                                    <option value="03.30">03.30 PM</option>
                                                </select>
                                                <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Comments</label>
                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Book An Appointment</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/index.blade.php ENDPATH**/ ?>