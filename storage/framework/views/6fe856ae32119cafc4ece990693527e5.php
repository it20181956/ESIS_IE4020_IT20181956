<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center align-items-center vh-100 mt-5">

    <div class="col-md-8 mt-8 mt-sm-0 pt-5 pt-sm-0">
        <div class="card border-0 rounded shadow p-4 ms-xl-3">
            <div class="custom-form">
                <form action="<?php echo e(route('Save.Appointment')); ?>" method="post" enctype="multipart/form">
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
                                    <option value="Orthopedic">Orthopedic</option>
                                    <option value="Dentist">Dentist</option>
                                    <option value="Gastrologist">Gastrologist</option>
                                    <option value="Urologist">Urologist</option>
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
                                <select class="form-select form-control" name="doctor" id="doctor-select">
                                    <option value="<?php echo e($doctorId); ?>">Dr. <?php echo e($doctorFName); ?> <?php echo e($doctorLName); ?></option>
                                </select>
                                <script>
                                    document.getElementById('doctor-select').addEventListener('mousedown', function(event) {
                                        event.preventDefault();
                                    });
                                </script>
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
                                <input name="date" type="text" class="form-control start" placeholder="<?php echo e($selectedDate); ?>" value="<?php echo e($selectedDate); ?>" id="book-date">
                                <script>
                                    document.getElementById('book-date').addEventListener('mousedown', function(event) {
                                        event.preventDefault();
                                    });
                                </script>
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
                                <select class="form-select form-control" name="time" required >
                                    <option value="">Select Time Slot</option>
                                    <?php $__currentLoopData = $availableTimeSlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeSlot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($timeSlot); ?>"><?php echo e($timeSlot); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/codeboysco/public_html/senura/resources/views/booking-appointment.blade.php ENDPATH**/ ?>