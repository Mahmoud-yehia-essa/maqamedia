<?php $__env->startSection('admin'); ?>

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">كل خدمات المستخدمين</div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="<?php echo e(route('add.user_service')); ?>">
                <button type="button" class="btn btn-primary">إضافة خدمة جديدة</button>
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
                        <th>#</th>
                        <th>المستخدم</th>
                        <th>الخدمة</th>
                        <th>حالة الطلب</th>
                        <th>السعر الكلي</th>
                        
                        <th>الملف</th>
                        <th>الملف النهائي</th>
                        
                        <th>إجراء</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($item->user->fname ?? 'غير محدد'); ?></td>
                            <td><?php echo e($item->service->title ?? 'غير محدد'); ?></td>
                            <td>

                                                                           <?php if($item->status == 'completed'): ?>
        <span class="badge bg-success text-white">مكتمل</span>
    <?php elseif($item->status == 'approved'): ?>
        <span class="badge bg-info text-white">الموافقة على العمل وتحديد السعر</span>
    <?php elseif($item->status == 'working'): ?>
        <span class="badge bg-warning text-white">تأكيد العمل وجاري العمل عليه</span>
    <?php elseif($item->status == 'pending'): ?>
        <span class="badge bg-secondary text-white">قيد الانتظار</span>
    <?php else: ?>
        <span class="badge bg-danger text-white">مرفوض</span>
    <?php endif; ?>


                            </td>
                            <td><?php echo e($item->total_price ?? 0); ?></td>
                            
                            <td>
                                <?php if($item->attach): ?>
                                    <a href="<?php echo e(asset($item->attach)); ?>" target="_blank">ملف المستخدم</a>
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($item->admin_attach): ?>
                                    <a href="<?php echo e(asset($item->admin_attach)); ?>" target="_blank">الملف النهائي</a>
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                            
                            <td>


                                    <a href="<?php echo e(route('all.chat.admin.message',$item->id)); ?>" type="button" class="btn btn-sm btn-outline-success">
                                        <i class="bi bi-chat-dots"></i>
                                    </a>
                                <a href="<?php echo e(route('edit.user_service', $item->id)); ?>" class="btn btn-info btn-sm">تعديل</a>
                                <a href="<?php echo e(route('delete.user_service', $item->id)); ?>" class="btn btn-danger btn-sm" id="delete">حذف</a>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                     <th>#</th>
                        <th>المستخدم</th>
                        <th>الخدمة</th>
                        <th>حالة الطلب</th>
                        <th>السعر الكلي</th>
                        
                        <th>الملف</th>
                        <th>الملف النهائي</th>
                        
                        <th>إجراء</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/user_service/all_user_service.blade.php ENDPATH**/ ?>