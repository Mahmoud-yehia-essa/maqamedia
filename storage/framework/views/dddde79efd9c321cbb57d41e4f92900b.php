<?php $__env->startSection('admin'); ?>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">الكوبونات المضافة</div>
					<div class="ps-3">

					</div>
					<div class="ms-auto">

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
				<th>اسم الكوبون </th>
				<th>الخصم</th>
				<th>تاريخ الانتهاء</th>
				<th>حالة الكوبون</th>
				<th>الاجراء</th>
			</tr>
		</thead>
		<tbody>
	<?php $__currentLoopData = $coupon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td> <?php echo e($key+1); ?> </td>
				<td> <?php echo e($item->coupon_name); ?></td>
				<td> <?php echo e($item->coupon_discount); ?>%  </td>
				<td> <?php echo e(Carbon\Carbon::parse($item->coupon_validity)->format('D, d F Y')); ?>  </td>


				<td>
<?php if($item->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d')): ?>
<span class="badge rounded-pill bg-success">صالح للاستخدام</span>
<?php else: ?>
<span class="badge rounded-pill bg-danger">غير صالح للاستخدام</span>
<?php endif; ?>

				  </td>

				<td>
					<a href="<?php echo e(route('edit.coupon',$item->id)); ?>" class="btn btn-info">تعديل</a>
					<a href="<?php echo e(route('delete.coupon',$item->id)); ?>" class="btn btn-danger" id="delete" >حذف</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


		</tbody>
		<tfoot>
			<tr>
					<th>الرقم</th>
				<th>اسم الكوبون </th>
				<th>الخصم</th>
				<th>تاريخ الانتهاء</th>
				<th>حالة الكوبون</th>
				<th>الاجراء</th>
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>



			</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/coupon/coupon_all.blade.php ENDPATH**/ ?>