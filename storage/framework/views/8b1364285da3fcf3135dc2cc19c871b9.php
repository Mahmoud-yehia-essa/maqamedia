<?php $__env->startSection('admin'); ?>

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">الاحصائيات</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">

						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<hr/>




<div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">

	<form method="post" action="<?php echo e(route('search-by-date')); ?>">
		<?php echo csrf_field(); ?>
		<div class="col">
			<div class="card">

				<div class="card-body">
					<h5 class="card-title">البحث بالتاريخ</h5>
					 <label class="form-label">التاريخ:</label>
		<input type="date" name="date" class="form-control">

        <?php if($errors->has('date')): ?>
        <div class="alert alert-danger mt-2"><?php echo e($errors->first('date')); ?></div>
    <?php endif; ?>

    <br>
		<input type="submit" class="btn btn-rounded btn-primary" value="بحث">
				</div>


			</div>
		</div>
	</form>




	<form method="post" action="<?php echo e(route('search-by-month')); ?>">
		<?php echo csrf_field(); ?>

	<div class="col">
			<div class="card">

				<div class="card-body">
					<h5 class="card-title">البحث بالشهر</h5>
					 <label class="form-label">الشهر:</label>
		<select name="month" class="form-select mb-3" aria-label="Default select example">
		<option value="non" selected="">اختر الشهر</option>
		<option value="January">يناير</option>
<option value="February">فبراير</option>
<option value="March">مارس</option>
<option value="April">أبريل</option>
<option value="May">مايو</option>
<option value="June">يونيو</option>
<option value="July">يوليو</option>
<option value="August">أغسطس</option>
<option value="September">سبتمبر</option>
<option value="October">أكتوبر</option>
<option value="November">نوفمبر</option>
<option value="December">ديسمبر</option>
	</select>

	  <label class="form-label">السنة:</label>
		<select name="year_name" class="form-select mb-3" aria-label="Default select example">
		<option value="non" selected="">اختر السنة</option>
		<option value="2025">2025</option>
		<option value="2026">2026</option>
		<option value="2027">2027</option>
		<option value="2028">2028</option>
		<option value="2029">2029</option>
	</select>
    <?php if($errors->has('year_name')): ?>
    <div class="alert alert-danger mt-2"><?php echo e($errors->first('year_name')); ?></div>

<?php endif; ?>

<?php if($errors->has('month')): ?>
<div class="alert alert-danger mt-2"><?php echo e($errors->first('month')); ?></div>

<?php endif; ?>

		<br>
		<input type="submit" class="btn btn-rounded btn-primary" value="بحث">
				</div>


			</div>
		</div>
	</form>






	<form method="post" action="<?php echo e(route('search-by-year')); ?>">
		<?php echo csrf_field(); ?>

		<div class="col">
			<div class="card">

				<div class="card-body">
					<h5 class="card-title">البحث بالسنة</h5>


	  <label class="form-label">السنة:</label>
      <select name="years" class="form-select mb-3" aria-label="Default select example">
		<option value="non" selected="">اختر السنة</option>
		<option value="2025">2025</option>
		<option value="2026">2026</option>
		<option value="2027">2027</option>
		<option value="2028">2028</option>
		<option value="2029">2029</option>
	</select>
    <?php if($errors->has('years')): ?>
    <div class="alert alert-danger mt-2"><?php echo e($errors->first('years')); ?></div>
<?php endif; ?>

		<br>
		<input type="submit" class="btn btn-rounded btn-primary" value="بحث">
				</div>


			</div>
		</div>
	</form>



				</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/report/report_view.blade.php ENDPATH**/ ?>