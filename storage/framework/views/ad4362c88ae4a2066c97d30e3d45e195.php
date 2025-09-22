<?php $__env->startSection('admin'); ?>

<div class="container mt-4">
    <h4>إعدادات ألوان الموقع</h4>
    <form action="<?php echo e(route('site.colors.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label class="form-label">لون البانر</label>
            <input type="color" name="primary_color" value="<?php echo e($color->primary_color ?? '#ED7032'); ?>" class="form-control form-control-color">
        </div>

        







           <div class="mb-3">
            <label class="form-label">لون العنوان الهيدر في الرئيسية</label>
            <input type="color" name="font_color_main_header_home" value="<?php echo e($color->font_color_main_header_home ?? '#FFFFFF'); ?>" class="form-control form-control-color">
        </div>


            <div class="mb-3">
            <label class="form-label">لون الخط العادي الهيدر في الرئيسية</label>
            <input type="color" name="font_color_normal_header_home" value="<?php echo e($color->font_color_normal_header_home ?? '#FFFFFF'); ?>" class="form-control form-control-color">
        </div>





           <div class="mb-3">
            <label class="form-label">لون العنواين في الرئيسية</label>
            <input type="color" name="font_color_main_home" value="<?php echo e($color->font_color_main_home ?? '#FFFFFF'); ?>" class="form-control form-control-color">
        </div>


            <div class="mb-3">
            <label class="form-label">لون الخط في الرئيسية</label>
            <input type="color" name="font_color_normal_home" value="<?php echo e($color->font_color_normal_home ?? '#FFFFFF'); ?>" class="form-control form-control-color">
        </div>


        

        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/site_colors/index.blade.php ENDPATH**/ ?>