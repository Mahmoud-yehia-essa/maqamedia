<?php $__env->startSection('main'); ?>
<script>
  // Frontend browser event with the SAME eventID → Meta deduplicates
  fbq('track', 'Purchase',
    { value: <?php echo e($order_value); ?>, currency: 'USD' },
    { eventID: '<?php echo e($eventId); ?>' }
  );
</script>

<h1>Thank you!</h1>
<p>We’re processing your order.</p>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/meta/thankyou.blade.php ENDPATH**/ ?>