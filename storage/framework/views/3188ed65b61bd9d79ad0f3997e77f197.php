<?php $__env->startSection('admin'); ?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-4">تعديل خدمة المستخدم</h4>

            <form method="POST" action="<?php echo e(route('update.user_service')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($value->id); ?>">

                <!-- اختيار المستخدم -->
                <div class="row mb-3">
                    <div class="col-sm-3"><h6 class="mb-0">المستخدم</h6></div>
                    <div class="col-sm-9 text-secondary">
                        <select name="user_id" class="form-control">
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>" <?php echo e($value->user_id==$user->id?'selected':''); ?>>
                                    <?php echo e($user->fname); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- اختيار الخدمة -->
                <div class="row mb-3">
                    <div class="col-sm-3"><h6 class="mb-0">الخدمة</h6></div>
                    <div class="col-sm-9 text-secondary">
                        <select name="service_id" class="form-control">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($service->id); ?>" <?php echo e($value->service_id==$service->id?'selected':''); ?>>
                                    <?php echo e($service->title); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- الوصف -->
                <div class="row mb-3">
                    <div class="col-sm-3"><h6 class="mb-0">الوصف بالعربية</h6></div>
                    <div class="col-sm-9 text-secondary">
                        <textarea name="des" class="form-control"><?php echo e($value->des); ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3"><h6 class="mb-0">الوصف بالإنجليزية</h6></div>
                    <div class="col-sm-9 text-secondary">
                        <textarea name="des_en" class="form-control"><?php echo e($value->des_en); ?></textarea>
                    </div>
                </div>

                <!-- ملف المستخدم -->
                


                 <div class="row mb-3">
                    <div class="col-sm-3"><h6 class="mb-0">ملف المستخدم</h6></div>
                    <div class="col-sm-9 text-secondary">
                         <?php if($value->attach): ?>
                            <a href="<?php echo e(asset($value->attach)); ?>" target="_blank">الملف الحالي</a>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- حالة الطلب -->
                <div class="row mb-3">
                    <div class="col-sm-3"><h6 class="mb-0">حالة الطلب</h6></div>
                    <div class="col-sm-9 text-secondary">
                        <select name="status" class="form-control">
                            <option value="pending" <?php echo e($value->status=='pending'?'selected':''); ?>>جاري مراجعة الطلب</option>
                            <option value="approved" <?php echo e($value->status=='approved'?'selected':''); ?>> التأكيد وتحديد السعر</option>
                            <option value="working" <?php echo e($value->status=='working'?'selected':''); ?>>اعتماد العمل</option>

                            <option value="completed" <?php echo e($value->status=='completed'?'selected':''); ?>>العمل مكتمل</option>


                            <option value="rejected" <?php echo e($value->status=='rejected'?'selected':''); ?>>رفض الطلب</option>

                        </select>
                    </div>
                </div>

                <!-- السعر والدفعات -->
                <div class="row mb-3">
                    <div class="col-sm-3"><h6 class="mb-0">السعر الكلي</h6></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="number" name="total_price" class="form-control" value="<?php echo e($value->total_price ?? ''); ?>" step="0.01">
                                                        <?php $__errorArgs = ['total_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                </div>

                

                <!-- الملف النهائي (Admin) -->
                <div class="row mb-3">
                    <div class="col-sm-3"><h6 class="mb-0">الملف النهائي (Admin)</h6></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="file" name="admin_attach" class="form-control mb-2">
                        <?php if($value->admin_attach): ?>
                            <a href="<?php echo e(asset($value->admin_attach)); ?>" target="_blank">الملف النهائي الحالي</a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- زر الحفظ -->
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="حفظ التغييرات">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/user_service/edit_user_service.blade.php ENDPATH**/ ?>