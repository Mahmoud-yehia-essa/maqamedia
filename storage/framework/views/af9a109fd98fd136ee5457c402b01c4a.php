<?php $__env->startSection('main'); ?>

<div class="about-header-area" style="background-color: #ED7032" >
    
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="about-inner-header heading9 text-center">
                   <h1 style="font-family: 'Cairo', sans-serif;color:white">تسجيل دخول</h1>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow p-5" dir="rtl">

                <?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?php echo e(session('error')); ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
    </div>
<?php endif; ?>


             <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo e(session('success')); ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
    </div>
<?php endif; ?>
                <h3 class="text-center mb-4">تسجيل الدخول</h3>

                

                <form method="POST" action="<?php echo e(route('show.user.login.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">كلمة المرور</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="أدخل كلمة المرور" required>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-lg" style="background-color: #ED7032; color: white;">تسجيل الدخول</button>
                    </div>

                    <p class="text-center">ليس لديك حساب؟
                        <a href="<?php echo e(route('show.user.register')); ?>" class="text-decoration-none" style="color: #ED7032;">سجل هنا</a>
                    </p>
                </form>

                <!-- رسالة دعائية بعد تسجيل الدخول -->
                <div class="text-center mt-4 p-3 bg-light rounded">
                    <h5 style="color: #ED7032;">اطلب الآن الخدمة أون لاين بكل سهولة</h5>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/user/login.blade.php ENDPATH**/ ?>