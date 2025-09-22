<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">تعديل المستخدم </div>
</div>
<!--end breadcrumb-->
<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-8">
                <form action="<?php echo e(route('edit.user.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>


                    <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                    <input type="hidden" name="old_image" value="<?php echo e($user->photo); ?>">
                    <input type="hidden" name="old_email" value="<?php echo e($user->email); ?>">

                    <div class="card">
                        <div class="card-body">



                        <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">نوع المستخدم</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">


                                        <select  name="role" class="form-select" aria-label="Default select example">
                                            <option selected="" value="non">الرجاء إختيار نوع المستخدم</option>

                                        <option <?php echo e($user->role === 'owner' ? 'selected' : ''); ?> value="owner">مالك</option>
                                         <option <?php echo e($user->role === 'admin' ? 'selected' : ''); ?> value="admin">مدير</option>
                                        <option <?php echo e($user->role === 'user' ? 'selected' : ''); ?>  value="user">مستخدم</option>




                                        </select>

                                        <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>



                            <!-- First Name -->
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">الاسم</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="fname" value="<?php echo e($user->fname); ?>" type="text" class="form-control" value="<?php echo e(old('fname')); ?>" />
                                    <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            

                            <!-- Email -->
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">البريد الإلكتروني</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="email" type="email" value="<?php echo e($user->email); ?>" class="form-control" value="<?php echo e(old('email')); ?>" />
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">كلمة المرور</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="password" type="password" class="form-control" autocomplete="new-password"/>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">تأكيد كلمة المرور</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="password_confirmation" type="password" class="form-control"  autocomplete="new-password"/>
                                    <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>






                            <!-- Phone -->
<div class="row mb-3">
    <div class="col-sm-3">
        <h6 class="mb-0">رقم الهاتف</h6>
    </div>

    <div class="col-sm-9 text-secondary">
        <div class="d-flex">

            <!-- Phone Input -->
            <div class="flex-grow-1">
                <input name="phone" dir="ltr" type="text"
                       class="form-control"
                       value="<?php echo e($user->phone); ?>"
                       value="<?php echo e(old('phone')); ?>"
                       placeholder="51234567"
                       value="<?php echo e(old('phone')); ?>" />
            </div>

             <!-- Country Code Select -->
            <div class="ms-2" style="min-width: 120px;">
      <select name="country_data" class="form-select">
    <?php $__currentLoopData = $countryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option <?php echo e($country['dial'] === $user->country_code ? 'selected' : ''); ?> value="<?php echo e(json_encode(['dial' => $country['dial'], 'code' => $country['code'],'name' => $country['name'], 'flag' => $country['flag']])); ?>">
            <?php echo e($country['code'] ?? ''); ?> <?php echo e($country['flag'] ?? ''); ?> <?php echo e($country['dial']); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
            </div>

        </div>

        <!-- Error messages -->
        <?php $__errorArgs = ['country_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger d-block" dir="rtl"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger d-block" dir="rtl"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>


                            <!-- Address -->
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">العنوان</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="address" type="text" value="<?php echo e($user->address); ?>" class="form-control" value="<?php echo e(old('address')); ?>" />
                                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>


                            <!-- Profile Picture -->
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">الصورة</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="photo" type="file" id="image" class="form-control" />
                                    <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <!-- Profile Picture Preview -->
                            <div class="row mb-3">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <img id="showImage" src="<?php echo e((!empty($user->photo) && $user->photo != 'non' ) ? url('upload/user_images/'.$user->photo):url('upload/no_image.jpg')); ?>" alt="Admin" width="110">


                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="تعديل المستخدم" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/admin/users/edit_user.blade.php ENDPATH**/ ?>