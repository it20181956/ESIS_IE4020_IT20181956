<!doctype html>
<html lang="en" dir="ltr">

<head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Doctris - Doctor Appointment Booking System</title>
       
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">

        <!-- Css -->
       <link href="<?php echo e(asset('assets/libs/tiny-slider/tiny-slider.css')); ?>" rel="stylesheet">
       <link href="<?php echo e(asset('assets/libs/js-datepicker/datepicker.min.css')); ?>" rel="stylesheet">
       <link href="<?php echo e(asset('assets/libs/tobii/css/tobii.min.css')); ?>" rel="stylesheet">
        <!-- Bootstrap Css -->
       <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/libs/remixicon/fonts/remixicon.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/libs/%40iconscout/unicons/css/line.css')); ?>" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="<?php echo e(asset('assets/css/style.min.css')); ?>" class="theme-opt" rel="stylesheet" type="text/css" />
        
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll  sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="<?php echo e(route('home')); ?>">
                        <span class="logo-light-mode">
                            <img src="assets/images/logo-dark.png" class="l-dark" height="22" alt="">
                            <img src="assets/images/logo-light.png" class="l-light" height="22" alt="">
                        </span>
                        <img src="assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
                    </a>
                </div>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!-- Start Dropdown -->
                <ul class="dropdowns list-inline mb-0">

                    <li class="list-inline-item mb-0 ms-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark" href="doctor-profile.html">
                                    <img src="assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="flex-1 ms-2">
                                        <span class="d-block mb-1">Calvin Carlo</span>
                                        <small class="text-muted">Orthopedic</small>
                                    </div>
                                </a>
                                <a class="dropdown-item text-dark" href="<?php echo e(route('login')); ?>"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span>Doctor Dashboard</a>
                                <a class="dropdown-item text-dark" href="<?php echo e(route('home')); ?>"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span>Patiant Dashboard</a>
                                <a class="dropdown-item text-dark" href="<?php echo e(route('admin-dashboard')); ?>"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span>Admin Dashboard</a>

                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                <!-- Start Dropdown -->

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu nav-left">
                        <li class="has-submenu parent-menu-item">
                            <a href="<?php echo e(route('home.route')); ?>">Home</a>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="<?php echo e(route('doctor-team-one.route')); ?>">Doctors</a>
                        </li>

                        <li><a href="<?php echo e(route('aboutus.route')); ?>" class="sub-menu-item"> About Us</a></li>

                        <li><a href="<?php echo e(route('contact.route')); ?>" class="sub-menu-item">Contact</a></li>

                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->


        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>



        <!-- Start -->
        <footer class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="assets/images/logo-light.png" height="22" alt="">
                        </a>
                        <p class="mt-4 me-xl-5">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                    </div><!--end col-->

                    <div class="col-xl-7 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Doctris</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="<?php echo e(route('aboutus.route')); ?>" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> About us</a></li>
                                    <li><a href="<?php echo e(route('contact.route')); ?>" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Contact</a></li>
                                  
                                   
                                    <li><a href="<?php echo e(route('login')); ?>" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Login</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Departments</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Eye Care</a></li>
                                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Psychotherapy</a></li>
                                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Dental Care</a></li>
                                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Orthopedic</a></li>
                                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Cardiology</a></li>
                                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Gynecology</a></li>
                                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Neurology</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Contact us</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li class="d-flex align-items-center">
                                        <i data-feather="mail" class="fea icon-sm text-foot align-middle"></i>
                                        <a href="mailto:contact@example.com" class="text-foot ms-2">contact@example.com</a>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i data-feather="phone" class="fea icon-sm text-foot align-middle"></i>
                                        <a href="tel:+152534-468-854" class="text-foot ms-2">+152 534-468-854</a>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i data-feather="map-pin" class="fea icon-sm text-foot align-middle"></i>
                                        <a href="javascript:void(0)" class="video-play-icon text-foot ms-2">View on Google map</a>
                                    </li>
                                </ul>

                                <ul class="list-unstyled social-icon footer-social mb-0 mt-4">
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-5">
                <div class="pt-4 footer-bar">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start text-center">
                                <p class="mb-0"><script>document.write(new Date().getFullYear())</script> © Doctris. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Damith</a>.</p>
                            </div>
                        </div><!--end col-->

                        <div class="col-sm-6 mt-4 mt-sm-0">
                            <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                                <li class="list-inline-item"><a href="#" class="text-foot me-2">Terms</a></li>
                                <li class="list-inline-item"><a href="#" class="text-foot me-2">Privacy</a></li>
                                <li class="list-inline-item"><a href="#" class="text-foot me-2">About</a></li>
                                <li class="list-inline-item"><a href="#" class="text-foot me-2">Contact</a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->

        <!-- javascript -->
        <script src="<?php echo e(asset('assets/libs/tiny-slider/min/tiny-slider.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/easy_background.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/js-datepicker/datepicker.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/tobii/js/tobii.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/feather-icons/feather.min.js')); ?>"></script>

        <script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/doctor-apexchart.init.js')); ?>"></script>

        <!-- Main Js -->
        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/plugins.init.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>


        <script>
            easy_background("#home",
                {
                    slide: ["assets/images/bg/02.jpg", "assets/images/bg/03.jpg", "assets/images/bg/04.jpg"],
                    delay: [3000, 3000, 3000]
                }
            );
        </script>
    </body>

</html>
<?php /**PATH /home2/codeboysco/public_html/senura/resources/views/layouts/main.blade.php ENDPATH**/ ?>