<?php $__env->startSection('main'); ?>

<div class="about-header-area" style="background-color: #ED7032" >
    
    <img src="../assets/img/elements/star2.png" alt="" class="star2 keyframe5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1 style="font-family: 'Cairo', sans-serif;color:white"> الخدمة أون لاين</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo e(session('success')); ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
    </div>
<?php endif; ?>

<div class="container my-5">
    <div class="row">
       <!-- Sidebar -->
<div class="col-lg-3 mb-4">
    <div class="list-group">
        <a href="<?php echo e(route('show.user.dashboard')); ?>"
           class="list-group-item list-group-item-action <?php echo e(request()->routeIs('show.user.dashboard') ? 'active' : ''); ?>">
           معلوماتي
        </a>

        <a href="<?php echo e(route('show.user.dashboard.order')); ?>"
           class="list-group-item list-group-item-action <?php echo e(request()->routeIs('show.user.dashboard.order') ? 'active' : ''); ?>">
           طلباتي
        </a>

        <a href="<?php echo e(route('show.add.new.order')); ?>"
           class="list-group-item list-group-item-action <?php echo e(request()->routeIs('show.add.new.order') ? 'active' : ''); ?>">
           تقديم طلب جديد
        </a>

        <a href="<?php echo e(route('user.logout.dashboard')); ?>" class="list-group-item list-group-item-action">
           تسجيل الخروج
        </a>
    </div>
</div>


        <!-- Main Content -->
    <?php echo $__env->yieldContent('user_content'); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/user/user_dashboard.blade.php ENDPATH**/ ?>