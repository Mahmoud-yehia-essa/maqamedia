<?php $__env->startSection('admin'); ?>

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">كل أعضاء الفريق</div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="<?php echo e(route('add.teamwork')); ?>">
                <button type="button" class="btn btn-primary">إضافة عضو جديد</button>
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
                        <th>الاسم</th>
                        <th>المنصب</th>
                        <th>تاريخ الإضافة</th>
                        <th>الصورة</th>
                        <th>الإجراء</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->position); ?></td>
                            <td><?php echo e($item->created_at ? $item->created_at->diffForHumans() : 'غير محدد'); ?></td>
                            <td>
                                <img onclick="showImageModal(this.src)" src="<?php echo e(asset($item->photo ?? 'upload/no_image.jpg')); ?>" style="width: 70px; height:40px; cursor: pointer;">
                            </td>
                            <td>
                                <?php if($item->status == 'active'): ?>
                                    <a href="<?php echo e(route('inactive.teamwork', $item->id)); ?>" class="btn btn-primary" title="إخفاء">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('active.teamwork', $item->id)); ?>" class="btn btn-primary" title="إظهار">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </a>
                                <?php endif; ?>
                                <a href="<?php echo e(route('edit.teamwork',$item->id)); ?>" class="btn btn-info">تعديل</a>
                                <a href="<?php echo e(route('delete.teamwork',$item->id)); ?>" class="btn btn-danger" id="delete">حذف</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>المنصب</th>
                        <th>تاريخ الإضافة</th>
                        <th>الصورة</th>
                        <th>الإجراء</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-transparent border-0">
        <button type="button" class="btn text-white" data-bs-dismiss="modal" style="position:absolute;top:10px;right:10px;background:black;">&times;</button>
        <img id="modalImage" src="" class="img-fluid rounded shadow">
      </div>
    </div>
</div>

<script>
    function showImageModal(src) {
        document.getElementById('modalImage').src = src;
        var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
        myModal.show();
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/team_work/all_team_work.blade.php ENDPATH**/ ?>