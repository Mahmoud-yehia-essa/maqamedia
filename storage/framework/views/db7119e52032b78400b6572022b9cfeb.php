<?php $__env->startSection('main'); ?>

<!-- Header -->
<div class="about-header-area" style="background-image: url(<?php echo e(asset('frontend/assets/img/bg/inner-header.png')); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="<?php echo e(asset('frontend/assets/img/elements/elements1.png')); ?>" alt="" class="elements1 aniamtion-key-1">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1 style="font-family: 'Cairo', sans-serif;color:white">تفاصيل الخطة</h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card shadow-lg p-4 rounded-3">

                <!-- عنوان -->
                <h3 class="mb-3" style="font-family: 'Cairo'"><?php echo e($plan->title); ?></h3>

                <!-- وصف -->
                <p class="text-muted"><?php echo e($plan->des); ?></p>

                <!-- السعر -->
                <h4 class="text-primary mb-3"><?php echo e($plan->price); ?> د.ك</h4>

                <!-- الخدمات -->
                <h5 class="mb-2">تشمل الخدمة:</h5>
                <ul class="list-unstyled mb-4">
                    <?php $__currentLoopData = explode("\n", $plan->service); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(trim($line) !== ''): ?>
                            <li class="mb-3">
                                <i class="fa-solid fa-check text-success"></i> <?php echo e($line); ?>

                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <!-- الهنت -->
                <p class="fst-italic text-secondary"><?php echo e($plan->hint); ?></p>

                <hr>

                <!-- فورم -->
                <h5 class="mb-3">إرسال طلب لهذه الخطة</h5>
                <?php if(session('success')): ?>
                    <div class="alert alert-success fw-bold"><?php echo e(session('success')); ?></div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('add.planee.user.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="plan_id" value="<?php echo e($plan->id); ?>">

                    <div class="mb-3">
                        <label class="form-label">الاسم</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">البريد الإلكتروني</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">رقم الهاتف</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">الرسالة</label>
                        <textarea name="message" rows="3" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn w-100 text-white" style="background-color:#EC7032; border:none;">
    إرسال
</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/planne.blade.php ENDPATH**/ ?>