<?php $__env->startSection('main'); ?>

<div class="about-header-area" style="background-image: url(<?php echo e(asset('frontend/assets/img/bg/inner-header.png')); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="<?php echo e(asset('frontend/assets/img/elements/elements1.png')); ?>" alt="" class="elements1 aniamtion-key-1">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1 style="font-family: 'Cairo', sans-serif;color:white">أخبار الشركة</h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>




<!--===== BLOG AREA STARTS =======-->
<div class="blog7-section-area sp2  py-5">
    <div class="container">


         <div class="row">
            <div class="col-12 text-center">
                <div class="project15-header heading23">

                    <h3 style="font-family: 'Cairo', sans-serif; font-weight: 700; color: #ED7032; margin-bottom: 10px;"> <?php echo e($home[9]->title); ?></h3>
                    <div style="width: 60px; height: 3px; background: #ED7032; margin: 12px auto 10px; border-radius: 2px;"></div>

                    <!-- Full width description -->
                    <div class="mt-2"  style="width: 100%; padding: 0 20px; box-sizing: border-box; margin: 0 auto 20px;">
                        <p data-aos="fade-right" dir="rtl"
                           style="
                               text-align: right;
                               font-weight: bold;
                               font-size: 18px;
                               line-height: 1.8;
                               color:black;


                           ">
                            <?php echo e($home[9]->des); ?>

                        </p>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">

                     <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="col-lg-6 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
            <div class="blog-auhtor-boxarea">
              <div class="blog-content-area">
                <ul>
                  <li><a href="<?php echo e(route('show.news.details',$item->id)); ?>"><i class="fa-solid fa-calendar-days"></i><?php echo e($item->created_at->diffForHumans()); ?></a></li>
                </ul>
                <div class="space16"></div>
                <a style="font-family: 'Cairo" href="<?php echo e(route('show.news.details',$item->id)); ?>"><?php echo e($item->title); ?></a>
                <div class="space16"></div>
                <p style="
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 5;
    overflow: hidden;
    text-overflow: ellipsis;
        line-height: 1.8;"><strong><?php echo e($item->des); ?></strong></p>
                <a href="<?php echo e(route('show.news.details',$item->id)); ?>" class="readmore">المزيد<i class="fa-solid fa-arrow-left"></i></a>
              </div>
              <div class="space24"></div>
              <div class="img1">
               <figure class="image-anime">
                <img src="<?php echo e($item->photo); ?>" alt="">
               </figure>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/news.blade.php ENDPATH**/ ?>