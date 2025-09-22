<?php $__env->startSection('admin'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('add.gallery.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">العنوان</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="title" class="form-control" value="<?php echo e(old('title')); ?>">
                    </div>
                </div>

                
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Title</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="title_en" class="form-control" value="<?php echo e(old('title_en')); ?>">
                    </div>
                </div>

                
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">الوصف</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <textarea name="des" class="form-control" rows="3"><?php echo e(old('des')); ?></textarea>
                    </div>
                </div>

                
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Description</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <textarea name="des_en" class="form-control" rows="3"><?php echo e(old('des_en')); ?></textarea>
                    </div>
                </div>

                
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">صور متعددة</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="file" name="photos[]" class="form-control" multiple id="photos">
                    </div>
                </div>

                
                <div class="row mb-3">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary" id="preview_photos"></div>
                </div>

                
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="اضافة معرض جديد">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#photos').on('change', function(){
        $('#preview_photos').html('');
        var files = this.files;
        if(files){
            $.each(files, function(i, file){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#preview_photos').append('<img src="'+e.target.result+'" width="80" height="80" style="margin:3px; border:1px solid #ccc;">');
                }
                reader.readAsDataURL(file);
            });
        }
    });
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/gallery/create.blade.php ENDPATH**/ ?>