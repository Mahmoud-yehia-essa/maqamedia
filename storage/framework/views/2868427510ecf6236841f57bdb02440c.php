<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">تعديل كلمة المرور</div>

					<div class="ms-auto">

					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form method="post" action="<?php echo e(route('update.password')); ?>"  >
			<?php echo csrf_field(); ?>

		 <?php if(session('status')): ?>
		 <div class="alert alert-success" role="alert">
		 		<?php echo e(session('status')); ?>

		 </div>
		 <?php elseif(session('error')): ?>
		 <div class="alert alert-danger" role="alert">
		 	<?php echo e(session('error')); ?>

		 </div>
		 <?php endif; ?>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">كلمة المرور القديمة</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="password" name="old_password" class="form-control <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="current_password"   placeholder="كلمة المرور القديمة" />
					<?php $__errorArgs = ['old_password'];
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
					<h6 class="mb-0">كلمة المرور الجديدة</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="password" name="new_password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="new_password"   placeholder="كلمة المرور الجديدة" />
					<?php $__errorArgs = ['new_password'];
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
					<h6 class="mb-0">تأكيد كلمة المرور الجديدة</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation"   placeholder="تأكيد كلمة المرور الجديدة" />
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-primary px-4" value="حفظ التعديل" />
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/admin_change_password.blade.php ENDPATH**/ ?>