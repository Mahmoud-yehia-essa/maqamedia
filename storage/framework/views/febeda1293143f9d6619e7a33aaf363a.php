<?php $__env->startSection('admin'); ?>

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">كل المديرين</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">

        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="<?php echo e(route('add.user')); ?>" >

<button type="button" class="btn btn-primary">

    اضافة مستخدم

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
<th>الإسم</th>
<th>رقم الهاتف</th>

<th>تاريخ التسجيل</th>

<th> الصورة</th>
<th>الاجراء</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td> <?php echo e($key+1); ?> </td>
<td><?php echo e($item->fname); ?></td>
<td><?php echo e($item->phone); ?></td>


<td><?php echo e($item->created_at ? $item->created_at->diffForHumans() : 'لم يتم التحديد'); ?></td>


<td> <img onclick="showImageModal(this.src)" class="rounded-circle"  src="<?php echo e((!empty($item->photo) && $item->photo != 'non' )  ? url('upload/user_images/'.$item->photo):url('upload/no_image.jpg')); ?>" style="width: 50px; height:50px; cursor: pointer; border: 2px solid #0aa2dd;" >  </td>

<td>

<?php if($item->status == 'active'): ?>
<a href="<?php echo e(route('inactive.user',$item->id)); ?>" class="btn btn-primary" title="ايقاف التفعيل"> <i class="fa-solid fa-thumbs-down"></i> </a>
<?php else: ?>
<a href="<?php echo e(route('active.user',$item->id)); ?>" class="btn btn-primary" title="تفعيل"> <i class="fa-solid fa-thumbs-up"></i> </a>
<?php endif; ?>
<a href="<?php echo e(route('edit.user',$item->id)); ?>" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="<?php echo e(route('delete.user',$item->id)); ?>" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</tbody>
<tfoot>
<tr>
    <th>الرقم</th>
    <th>الاسم</th>
<th>رقم الهاتف</th>
    <th>تاريخ التسجيل</th>

    <th> الصورة</th>
    <th>الاجراء</th>
</tr>
</tfoot>
</table>
        </div>
    </div>
</div>



<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content position-relative bg-transparent border-0">

        <!-- Rectangular Close Button -->
        <button type="button"
                class="btn text-white"
                data-bs-dismiss="modal"
                aria-label="Close"
                style="
                  position: absolute;
                  top: 15px;
                  right: 15px;
                  background-color: black;
                  font-size: 30px;
                  padding: 1px 10px;
                  border-radius: 8px;
                  z-index: 1055;
                ">
            &times;
        </button>

        <!-- Image -->
        <img id="modalImage" src="" class="img-fluid rounded shadow"  alt="image">
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

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/users/all_admin.blade.php ENDPATH**/ ?>