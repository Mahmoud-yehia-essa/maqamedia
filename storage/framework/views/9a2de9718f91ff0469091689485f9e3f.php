<?php $__env->startSection('main'); ?>

<div class="about-header-area" style="background-color: #ED7032" >
    
    
    <div class="container">
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1 style="font-family: 'Cairo', sans-serif;color:white">تواصل معنا</h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo e(session('success')); ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
    </div>
<?php endif; ?>


<!--===== CONTACT AREA STARTS =======-->
<div class="contact-main-inner-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading2 contact-header">
                   <h5 style="color: orangered">اتصل بنا</h5>
                   <h2 style="font-family: 'Cairo'">تواصل مع شركة المقام نحن نقدر اتصالك</h2>
                   <strong>
                   <p>يلتزم فريقنا بتقديم الدعم السريع والفعال لضمان تلبية احتياجاتك. نحن نؤمن بالتواصل المفتوح ونحن مستعدون دائمًا للاستماع. تواصل معنا عبر الهاتف أو البريد الإلكتروني أو قم بزيارة شركتنا خلال ساعات العمل.</p>
                   </strong>
                   <div class="space32"></div>
                   <div class="number-address-area">
                    <div class="phone-number">
                        <div class="img1">

                            <img src=" <?php echo e(asset('frontend/assets/img/icons/phone4.svg')); ?>" alt="">
                        </div>
                        <div class="content">
                            <p style="font-family: 'Cairo'">رقم التليفون</p>
                            <a href="tel:123-456-7890">123-456-7890</a>
                        </div>
                    </div>

                    <div class="phone-number m-0">
                        <div class="img1">
                            <img src="<?php echo e(asset('frontend/assets/img/icons/email4.svg')); ?>" alt="">
                        </div>
                        <div class="content">
                            <p style="font-family: 'Cairo'">عنوان البريد الإلكتروني</p>
                            <a href="mailto:Infoseoc@gmail.com">info@gmail.com</a>
                        </div>
                    </div>
                   </div>
                   <div class="space50"></div>
                   <div class="number-address-area2">
                    <div class="phone-number">
                        <div class="img1">

                            <img src="<?php echo e(asset('frontend/assets/img/icons/location3.svg')); ?>" alt="">
                        </div>
                        <div class="content">
                            <a href="#" style="font-family: 'Cairo'">عنوان شركة المقام</a>
                        </div>
                    </div>

                    <div class="phone-number">
                        <a style="font-family: 'Cairo'" href="https://www.google.com/maps/place/29%C2%B020'27.2%22N+47%C2%B040'17.6%22E/@29.3405717,47.6726461,16.98z/data=!4m4!3m3!8m2!3d29.3408889!4d47.6715556?entry=ttu&g_ep=EgoyMDI1MDkxMC4wIKXMDSoASAFQAw%3D%3D" class="map" target="_blank">
                            العنوان عبر الخريطة
                        </a>
                    </div>
                   </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="contact-form-area">
                    <h4 style="font-family: 'Cairo'">تواصل معنا</h4>

                     <form method="post" action="<?php echo e(route('add.contactus.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input  type="text" placeholder="الإسم" name="name">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                        </div>



                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="email" placeholder="البريد الإلكتروني" name="email">
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
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="number" placeholder="رقم الهاتف" name="phone">

                                             <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                              <textarea placeholder="الرسالة" name="message"></textarea>
                             <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-area">
                                
                             <button style="font-family: 'Cairo'" type="submit" class="header-btn14">اتصل بنا<span><i class="fa-solid fa-arrow-left"></i></span></button>
                            </div>

                        </div>

                    </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="location-section-area sp2 bg2">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 m-auto">
          <div class="location-header text-center heading2">
            <h2 style="font-family: 'Cairo'">فروع الشركة</h2>
          </div>
        </div>
      </div>
      <div class="space60 d-lg-block d-none"></div>
      <div class="space30 d-lg-none d-block"></div>
     <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="location-boxes">
          <div class="img1">
            <img src="<?php echo e(asset('frontend/assets/img/icons/location3.svg')); ?>" alt="">
          </div>
          <div class="space32"></div>
            <a href="#"> فرع الجهراء <br class="d-lg-block d-none">
            العنوان</a>
            <div class="space24"></div>
            <p>رقم الهاتف</p>
            <a href="tel:123-456-7890">00965</a>
            <div class="space32"></div>
            <a href="https://www.google.com/maps/place/29%C2%B020'27.2%22N+47%C2%B040'17.6%22E/@29.3405717,47.6726461,16.98z/data=!4m4!3m3!8m2!3d29.3408889!4d47.6715556?entry=ttu&g_ep=EgoyMDI1MDkxMC4wIKXMDSoASAFQAw%3D%3D" class="map" target="_blank">العنوان عبر الخريطة</a>
          </div>
      </div>

      

      
     </div>
    </div>
</div>
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3463.406001!2d47.6715556!3d29.3408889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDIwJzI3LjIiTiA0N8KwNDAnMTcuNiJF!5e0!3m2!1sen!2s!4v1694520000001!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<!--===== CONTACT AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->

<!--===== CTA AREA ENDS =======-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/contactus.blade.php ENDPATH**/ ?>