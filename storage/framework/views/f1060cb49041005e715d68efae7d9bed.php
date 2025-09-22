<?php $__env->startSection('main'); ?>

<div class="about-header-area" style="background-color: #ED7032" >
    
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="about-inner-header heading9 text-center">
                     <h1 style="font-family: 'Cairo', sans-serif;color:white">تسجيل عضو جديد</h1>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow p-5" dir="rtl">
                <h3 class="text-center mb-4">إنشاء حساب جديد</h3>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('add.user.front.store')); ?>">
                    <?php echo csrf_field(); ?>

                    <!-- الاسم الكامل -->
                    <div class="mb-4">
                        <label for="name" class="form-label">الاسم الكامل</label>
                        <input type="text" value="<?php echo e(old('name')); ?>" class="form-control form-control-lg" id="name" name="name" placeholder="أدخل اسمك الكامل" required>
                     <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                    <!-- رقم الهاتف -->
                    <div class="mb-4">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <input type="tel" class="form-control form-control-lg" id="phone" value="<?php echo e(old('phone')); ?>" name="phone" placeholder="أدخل رقم هاتفك" required>
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                    <!-- البريد الإلكتروني -->
                    <div class="mb-4">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="أدخل بريدك الإلكتروني" required>

                     <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                    <!-- كلمة المرور مع الأيقونة داخل الحقل -->
                <div class="mb-4">
    <label for="password" class="form-label">كلمة المرور</label>
    <div class="position-relative">
        <span class="position-absolute top-50 start-0 translate-middle-y ms-3" id="togglePassword" style="cursor: pointer;">
            <i class="fa-solid fa-eye"></i>
        </span>
        <input type="password" class="form-control form-control-lg ps-5" id="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="أدخل كلمة المرور" required>
                     <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    </div>
</div>

                    <!-- زر التسجيل -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-lg" style="background-color: #ED7032; color: white;">
                            تسجيل حساب جديد
                        </button>
                    </div>

                    <!-- رابط تسجيل الدخول -->
                    <p class="text-center">هل لديك حساب بالفعل؟
                        <a href="<?php echo e(route('show.user.login')); ?>" class="text-decoration-none" style="color: #ED7032;">تسجيل الدخول هنا</a>
                    </p>
                </form>

                <!-- رسالة دعائية -->
                <div class="text-center mt-4 p-3 bg-light rounded">
                    <h5 style="color: #ED7032;">اطلب الآن الخدمة أون لاين بكل سهولة</h5>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Font Awesome (لأيقونة العين) -->
<script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

<!-- سكريبت إظهار/إخفاء كلمة المرور -->
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/user/register.blade.php ENDPATH**/ ?>