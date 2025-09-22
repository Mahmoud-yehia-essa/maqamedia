<?php $__env->startSection('main'); ?>

<!-- Header -->
<div class="about-header-area" style="background-image: url(<?php echo e(asset('frontend/assets/img/bg/inner-header.png')); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="<?php echo e(asset('frontend/assets/img/elements/elements1.png')); ?>" alt="" class="elements1 aniamtion-key-1">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1 style="font-family: 'Cairo', sans-serif;color:white">كل الخطط</h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pricing10-section-area sp2">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="pricing-header text-center heading15">
            <h5>خطة التسعير</h5>
            <h2 style="font-family: 'Cairo'">الخطط المتاحة</h2>
          </div>
        </div>
      </div>
      <div class="container">

        <div class="row">



            
<?php $__currentLoopData = $planne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="800">
      <div class="pricing-boxarea <?php echo e($item->is_suggest === 'yes' ? 'active' : ""); ?> flex-fill">

        <!-- العنوان -->
        <h4 style="font-family: 'Cairo'"><?php echo e($item->title); ?></h4>

        <!-- الوصف بحد أقصى 4 أسطر -->
        <p class="line-clamp-4">
          <?php echo e($item->des); ?>

        </p>

        <!-- السعر -->
        <h1><?php echo e($item->price); ?> د.ك</h1>

        <!-- زر اختيار الخطة -->
        <div class="btn-area1">
          <a href="<?php echo e(route('show.front.planne',$item->id)); ?>" class="header-btn17">
            اختر الخطة
            <span><i class="fa-solid fa-arrow-left"></i></span>
          </a>
        </div>

        <div class="space32"></div>

        <!-- قائمة الخدمات -->
        <div class="list-area">
          <h5>تشمل الخدمة:</h5>
          <ul>
            <?php $__currentLoopData = explode("\n", $item->service); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(trim($line) !== ''): ?>
                <li>
                  <img src="<?php echo e(asset('frontend/assets/img/icons/check12.svg')); ?>" alt="Check Icon" class="check2">
                  <img src="<?php echo e(asset('frontend/assets/img/icons/check5.svg')); ?>" alt="Check Icon" class="check3">
                  <?php echo e($line); ?>

                </li>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>

        <div class="space24"></div>

        <!-- الهنت -->
        <p class="pera">
          <?php echo e($item->hint); ?>

        </p>

      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




        </div>
          
      </div>
    </div>
    <!--===== PRICING AREA ENDS =======-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/planne_all_user.blade.php ENDPATH**/ ?>