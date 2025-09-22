<?php $__env->startSection('user_content'); ?>

<style>
  .custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
  }
  .custom-file input[type="file"] {
    display: none; /* نخفي العنصر الأصلي */
  }
  .custom-file-label {
    display: block;
    padding: 10px;
    background: #f8f9fa;
    border: 1px solid #ccc;
    border-radius: 6px;
    cursor: pointer;
    text-align: center;
  }
</style>

<div class="col-lg-9">
    <div class="card p-4 shadow">
        <h3 class="mb-4">مرحبًا, <?php echo e(Auth::user()->fname); ?></h3>

        <form method="POST" action="<?php echo e(route('add.new.order.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            
            <div class="mb-3">
                <label for="service_id" class="form-label fw-bold">اختر الخدمة</label>
            <select id="service_id" name="service_id" class="form-select" style="direction: rtl; text-align: right;">
    <option value="non" disabled selected>-- اختر الخدمة --</option>
     <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($service->id); ?>"><?php echo e($service->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

        <?php $__errorArgs = ['service_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">وصف اكثر عن ما تريد</label>
                <textarea id="description" name="description" class="form-control text-end" rows="4" placeholder="أدخل الوصف" style="direction: rtl;"></textarea>

                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            
            

<div class="mb-3">
  
  <div class="custom-file">
    <!-- نخفي input ونربط label بالـ id -->
    <input type="file" id="file" name="file">
    <label for="file" class="custom-file-label" id="file-label">اختر ملف للرفع</label>
  </div>
</div>


            
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">إرسال</button>
            </div>

        </form>
    </div>
</div>

<script>
  const fileInput = document.getElementById("file");
  const fileLabel = document.getElementById("file-label");

  fileInput.addEventListener("change", function () {
    if (this.files && this.files.length > 0) {
      fileLabel.textContent = this.files[0].name; // اسم الملف
    } else {
      fileLabel.textContent = "لم يتم اختيار ملف"; // النص الافتراضي
    }
  });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.pages.user.user_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/user/new_order_dashboard.blade.php ENDPATH**/ ?>