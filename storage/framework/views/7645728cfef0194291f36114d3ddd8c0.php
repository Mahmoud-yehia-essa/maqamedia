<?php $__env->startSection('admin'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">تعديل كوبون </div>

					<div class="ms-auto">

					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

<div class="col-lg-10">
	<div class="card">
		<div class="card-body">

 <form id="myForm" method="post" action="<?php echo e(route('update.coupon')); ?>"   >
			<?php echo csrf_field(); ?>

		<input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">

			   <div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">اسم الكوبون</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
	 <input type="text" name="coupon_name" class="form-control" value="<?php echo e($coupon->coupon_name); ?>"  />
        <?php $__errorArgs = ['coupon_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>

           <div class="row mb-3">
				<div class="col-sm-3">
							<h6 class="mb-0">الخصم(%)</h6>
                    <small>الرجاء اضافة الرقم فقط بدون نسبة</small>
				</div>
				<div class="form-group col-sm-9 text-secondary">
					<input type="number" name="coupon_discount" class="form-control" value="<?php echo e($coupon->coupon_discount); ?>"   />
                      <?php $__errorArgs = ['coupon_discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>

	<div class="row mb-3">
		<div class="col-sm-3">
					<h6 class="mb-0">حدد تاريخ صلاحية الكوبون</h6>
		</div>
		<div class="form-group col-sm-9 text-secondary">
			<input type="date" name="coupon_validity" class="form-control" min="<?php echo e(Carbon\Carbon::now()->format('Y-m-d')); ?>"  value="<?php echo e($coupon->coupon_validity); ?>"  />
              <?php $__errorArgs = ['coupon_validity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>
	</div>




			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-primary px-4" value="تعديل الكوبون" />
				</div>
			</div>
		</div>

		</form>



	</div>




							</div>
						</div>
					</div>
				</div>
			</div>




<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                coupon_name: {
                    required : true,
                },
                 coupon_discount: {
                    required : true,
                },
            },
            messages :{
                coupon_name: {
                    required : 'Please Enter Coupon Name',
                },
                coupon_discount: {
                    required : 'Please Enter Coupon Discount',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/coupon/edit_coupon.blade.php ENDPATH**/ ?>