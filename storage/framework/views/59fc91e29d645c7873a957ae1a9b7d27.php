<?php $__env->startSection('main'); ?>

    <div class="hero10-section-area">

<div class="container">
    <h1>Test Order</h1>
    <p>Click the button below to simulate a purchase event.</p>

    <form action="<?php echo e(route('orders.complete')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-primary">
            Complete Order
        </button>
    </form>
</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/meta/test.blade.php ENDPATH**/ ?>