<?php $__env->startSection('admin'); ?>
<div class="container d-flex justify-content-center align-items-center" >
    <div class="card w-100" style="max-width: 900px;">
        <div class="row g-0 h-100">
            <div class="col-xl-5 d-flex align-items-center justify-content-center w-100">
                <div class="card-body text-center">

                    <img src="<?php echo e(asset('backend/assets/images/logo-icon.png')); ?>" class="img-fluid" width="200" alt=""/>

                    <h1 class="font-weight-bold display-4">قريبا</h1>
                    <hr>
                    <h5>
                        التحكم في اضافة وطريقة عرض الإعلانات داخل التطبيق
                    </h5>

                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/ads/add_ads.blade.php ENDPATH**/ ?>