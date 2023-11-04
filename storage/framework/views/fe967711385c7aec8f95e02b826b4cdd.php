
<!doctype html>
<html lang="en" dir="ltr">

<head>
        <meta charset="utf-8" />
        <title>Doctris - Doctor Appointment Booking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in/" />
        <meta name="Version" content="v1.4.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="https://shreethemes.in/doctris/layouts/assets/images/favicon.ico">

        <!-- Css -->
        <link href="<?php echo e(asset('assets/libs/simplebar/simplebar.min.css')); ?>" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/libs/remixicon/fonts/remixicon.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/libs/%40iconscout/unicons/css/line.css')); ?>" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="<?php echo e(asset('assets/css/style.min.css')); ?>" class="theme-opt" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


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

        <div class="page-wrapper doctris-theme toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                    <div class="sidebar-brand">
                        <a href="<?php echo e(route('admin-dashboard')); ?>">
                            <img src="<?php echo e(asset('assets/images/logo-dark.png')); ?>" height="22" class="logo-light-mode" alt="">
                            <img src="<?php echo e(asset('assets/images/logo-light.png')); ?>" height="22" class="logo-dark-mode" alt="">
                            <span class="sidebar-colored">
                                <img src="<?php echo e(asset('assets/images/logo-light.png')); ?>" height="22" alt="">
                            </span>
                        </a>
                    </div>

                    <ul class="sidebar-menu">
                        <li><a href="<?php echo e(route('admin-dashboard')); ?>"><i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard</a></li>

                        <li><a href="<?php echo e(route('appointment.route')); ?>"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Appointment</a></li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-user me-2 d-inline-block"></i>Doctors</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="<?php echo e(route('doctors.view')); ?>">Doctors</a></li>
                                    <li><a href="<?php echo e(route('admin.add-doctor')); ?>">Add Doctor</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="uil uil-wheelchair me-2 d-inline-block"></i>Patients</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="<?php echo e(route('patients.view')); ?>">All Patients</a></li>
                                    <li><a href="<?php echo e(route('admin.add-patients')); ?>">Add Patients</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                    <!-- sidebar-menu  -->
                </div>
                <!-- Sidebar Footer -->
                <ul class="sidebar-footer list-unstyled mb-0">
                    <li class="list-inline-item mb-0 ms-1">
                        <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                            <i class="uil uil-comment"></i>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Footer -->
            </nav>
            <!-- sidebar-wrapper  -->
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                <div class="top-header">
                    <div class="header-bar d-flex justify-content-between border-bottom">
                        <div class="d-flex align-items-center">
                            <a href="#" class="logo-icon">
                                <img src="<?php echo e(asset('assets/images/logo-icon.png')); ?>" height="30" class="small" alt="">
                                <span class="big">
                                    <img src="<?php echo e(asset('assets/images/logo-dark.png')); ?>" height="22" class="logo-light-mode" alt="">
                                    <img src="<?php echo e(asset('assets/images/logo-light.png')); ?>" height="22" class="logo-dark-mode" alt="">
                                </span>
                            </a>
                            <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary ms-2" href="#">
                                <i class="uil uil-bars"></i>
                            </a>
                        </div>

                        <ul class="list-unstyled mb-0">


                            <li class="list-inline-item mb-0 ms-1">
                                <div class="dropdown dropdown-primary">
                                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                        <a class="dropdown-item d-flex align-items-center text-dark" href="#">
                                            <img src="<?php echo e(asset('assets/images/doctors/01.jpg')); ?>" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="flex-1 ms-2">
                                                <span class="d-block mb-1"><?php echo e(Auth::user()->fname); ?></span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                                        <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                        <div class="dropdown-divider border-top"></div>
                                           <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    </div>
                                </div>
                            </li>


                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </ul>
                    </div>
                </div>

                <main>
                    <?php echo $__env->yieldContent('AdminContent'); ?>
                </main>


                <!-- Footer Start -->
                <footer class="bg-footer-color shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center">
                                    <p class="mb-0 text-muted"><script>document.write(new Date().getFullYear())</script> © Doctris. Design with Damith<i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset"></a>.</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content -->
        </div>
        <!-- page-wrapper -->


        <!-- javascript -->
        <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/admin-apexchart.init.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/feather-icons/feather.min.js')); ?>"></script>
        <!-- Main Js -->
        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/plugins.init.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

        <!-- Initialize DataTable -->
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>


    </body>

</html>
<?php /**PATH /home2/codeboysco/public_html/senura/resources/views/admin/inc/adminlayout.blade.php ENDPATH**/ ?>