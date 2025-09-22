<?php $__env->startSection('main'); ?>

<div class="about-header-area" style="background-color: #ED7032" >
    
    
    <div class="container">
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1 style="font-family: 'Cairo', sans-serif;color:white">خدماتنا</h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<!--===== SERVICE AREA STARTS =======-->
<div class="service13-section-area py-5 sp2" id="service">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto text-center">
        <div class="others-header heading23 space-margin30">
          <h3 style="font-family: 'Cairo', sans-serif; font-weight: 700; color: #ED7032; margin-bottom: 10px;"><?php echo e($home[2]->title); ?></h3>
          <div style="width: 60px; height: 3px; background: #ED7032; margin: 12px auto 0; border-radius: 2px;"></div>
        </div>
      </div>
    </div>


    <!-- Full width paragraph with RTL, bold, 4-line limit -->
    <div class="mt-2"  style="width: 100%; padding: 0 20px; box-sizing: border-box; margin-bottom: 30px;">
      <p data-aos="fade-right" dir="rtl"
         style="
             text-align: right;
             font-weight: bold;
             font-size: 18px;
             line-height: 2;

         ">
        <?php echo e($home[2]->des); ?>

      </p>
    </div>

    <div class="row">
      <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
          <div class="service13-boxarea">
            <div class="icons">
              <img src="<?php echo e($item->photo); ?>" alt="">
            </div>
            <div class="space32"></div>
            <div class="content-area">
              <a href="<?php echo e(route('show.services.details',$item->id)); ?>" class="head" style="font-family: 'Cairo'"><?php echo e($item->title); ?></a>
              <div class="space16"></div>
              <p><?php echo e($item->des); ?></p>
              <div class="space24"></div>
              <a href="<?php echo e(route('show.services.details',$item->id)); ?>" class="readmore" style="font-family: 'Cairo'">المزيد <i class="fa-solid fa-arrow-left"></i></a>
              <h2><?php echo e($key+1); ?></h2>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/service.blade.php ENDPATH**/ ?>