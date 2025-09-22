<?php $__env->startSection('admin'); ?>

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">كل الخطط</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">

        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="<?php echo e(route('add.plan')); ?>">
                <button type="button" class="btn btn-primary">
                    إضافة خطة
                </button>
            </a>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<hr/>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>العنوان</th>
                        <th>تاريخ الإضافة</th>
                        <th>السعر</th>
                         <th>الخطة مقترحة</th>

                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo e($item->created_at ? $item->created_at->diffForHumans() : 'لم يتم التحديد'); ?></td>
                        <td><?php echo e(number_format($item->price, 2)); ?> د.ك</td>
                        <td>

                            <?php if($item->is_suggest === 'yes'): ?>
                                نعم
                            <?php else: ?>
                                لا
                            <?php endif; ?>
                        </td>

                        <td>
                            <a href="<?php echo e(route('edit.plan', $item->id)); ?>" class="btn btn-info">تعديل</a>
                            <a href="<?php echo e(route('delete.plan', $item->id)); ?>" class="btn btn-danger" id="delete">حذف</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>الرقم</th>
                        <th>العنوان</th>
                        <th>تاريخ الإضافة</th>
                        <th>السعر</th>
                        <th>الإجراءات</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/planne/all_planne.blade.php ENDPATH**/ ?>