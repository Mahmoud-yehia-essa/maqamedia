<?php $__env->startSection('main'); ?>

<style>

.line-clamp-4 {
  display: -webkit-box;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  line-height: 1.5em;   /* 👈 تحكم بارتفاع السطر */
  max-height: calc(1.5em * 6); /* 👈 يضمن ما يطلع سطر خامس */
}


</style>
<?php
    $colors = \App\Models\SiteColor::first();
?>
<style>
  .mainHeaderText {
    color: <?php echo e($colors->font_color_main_header_home); ?> !important;
}

  .normalHeaderText {
    color: <?php echo e($colors->font_color_normal_header_home); ?> !important;
}

  .font_color_main_home {
    color: <?php echo e($colors->font_color_main_home); ?> !important;
}


  .font_color_normal_home {
    color: <?php echo e($colors->font_color_normal_home); ?> !important;
}






</style>





    <div class="hero10-section-area">


      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="hero-header-area heading15">
              <h2 class="mainHeaderText" style="font-family: 'Cairo', sans-serif;">
                <?php echo e($home[0]->title); ?>

              </h2>

              <p  class="normalHeaderText" data-aos="fade-left" data-aos-duration="800" style="
                   text-align: right;
                   font-weight: bold;
                   font-size: 19px;
                   line-height: 1.8;
                   display: -webkit-box;
                   -webkit-line-clamp: 4;
                   -webkit-box-orient: vertical;
                   overflow: hidden;
                   margin: 0;
                   font-family: 'Cairo', sans-serif;
                   color:white
               " >
                                <?php echo e($home[0]->des); ?>


              </p>
            <br>

              <div class="btn-area" data-aos="fade-right" data-aos-duration="1200">
            <br>

            <a href="<?php echo e(route('show.about')); ?>" style="font-family: 'Cairo'" class="header-btn18">
              المزيد عن الشركة
              
            </a>
          </div>
              <div class="space32"></div>
              <div
                class="btn-area1"
                data-aos="fade-left"
                data-aos-duration="1000"
              >
                <a
                  href= <?php echo e($home[0]->video); ?>

                  class="video-btn popup-youtube"

                >
                  <span class="play"><i class="fa-solid fa-play"></i></span>
                  <span class="text" style="color:white " >فيديو</span>
                </a>
              </div>
              <div class="space32"></div>
            </div>
          </div>
          <div class="col-lg-1"></div>

          <div class="col-lg-6">
            <div class="imges">

              <img
    src=<?php echo e($home[0]->photo); ?>

    alt="Header Image"
    class="aniamtion-key-1"
/>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!--===== HERO AREA ENDS =======-->
<!--===== ABOUT AREA STARTS =======-->
<div class="about10-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="about-header text-center heading15">
          <h2 class="font_color_main_home" style="font-family: 'Cairo'"><?php echo e($home[1]->title); ?></h2>

          <!-- Full width paragraph with little margin -->
          <div style="width: 100%; padding: 0 20px; box-sizing: border-box; margin: 0 auto 20px;">
            <p  class="font_color_normal_home" data-aos="fade-right" dir="rtl"
               style="
                   text-align: right;
                   font-weight: bold;
                   font-size: 18px;
                   line-height: 1.8;
                   display: -webkit-box;
                   -webkit-line-clamp: 4;
                   -webkit-box-orient: vertical;
                   overflow: hidden;
                   margin: 0;
               ">
              <?php echo e($home[1]->des); ?>

            </p>
          </div>

          <div class="btn-area1" data-aos="fade-right" data-aos-duration="1200">
            <br>
            <a href="<?php echo e(route('show.about')); ?>" style="font-family: 'Cairo'" class="header-btn17">
              المزيد عن الشركة
              <span><i class="fa-solid fa-arrow-left"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="about-pera-list">
          <h3 class="font_color_main_home" data-aos="fade-right" data-aos-duration="800" style="font-family: 'Cairo'">
            بعض أعمال الشركة <br class="d-lg-block d-none" />
          </h3>
          <div class="space8"></div>
          <div data-aos="fade-right" data-aos-duration="1000">
            <ul>
              <?php $__currentLoopData = $companywork; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <img src="<?php echo e(asset('frontend/assets/img/icons/check12.svg')); ?>" alt="Check Icon" />
                <a class="font_color_normal_home" href="<?php echo e(route('show.portfolio.details',$item->id)); ?>">
                  <?php echo e($item->title); ?>

                </a>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-right" data-aos-duration="1200">
            <a href="<?php echo e(route('show.portfolio')); ?>" style="font-family: 'Cairo'" class="header-btn17">
              المزيد عن أعمال الشركة
              <span><i class="fa-solid fa-arrow-left"></i></span>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="about-images reveal">
          <img src="<?php echo e($home[1]->photo); ?>" alt="About Image">
        </div>
      </div>

      <div class="col-lg-3">
        <div class="counter-boxarea text-center">
          <div class="row">
            <div class="col-lg-12 col-md-6 col-6">
              <div class="counter-box" data-aos="zoom-out" data-aos-duration="800">
                <h2><span class="font_color_normal_home" class="counter"><?php echo e($mainCounter[0]->counter); ?>+</span></h2>
                <p class="font_color_normal_home"><?php echo e($mainCounter[0]->title); ?></p>
              </div>
            </div>

            <div class="col-lg-12 col-md-6 col-6">
              <div class="counter-box" data-aos="zoom-out" data-aos-duration="800">
                <h2><span class="font_color_normal_home" class="counter"><?php echo e($mainCounter[1]->counter); ?>+</span></h2>
                <p class="font_color_normal_home"><?php echo e($mainCounter[1]->title); ?></p>
              </div>
            </div>

            <div class="col-lg-12 col-md-6 col-6">
              <div class="counter-box" data-aos="zoom-out" data-aos-duration="800">
                <h2><span class="font_color_normal_home" class="counter"><?php echo e($mainCounter[2]->counter); ?>+</span></h2>
                <p class="font_color_normal_home"><?php echo e($mainCounter[2]->title); ?></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->
    <div class="service10-section-area sp1">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 m-auto">
            <div class="service-header text-center heading15">
              <h2   class="font_color_main_home"  style="font-family: 'Cairo'"><?php echo e($home[2]->title); ?></h2>
               <p data-aos="fade-right" dir="rtl"

               class="font_color_normal_home"
   style="
       text-align: right;
       font-weight: bold;
       font-size: 18px;
       line-height: 1.8;
       display: -webkit-box;
       -webkit-line-clamp: 3;
       -webkit-box-orient: vertical;
       overflow: hidden;
   ">
            <?php echo e($home[2]->des); ?>

            </p>
            </div>
          </div>
        </div>




        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="all-service-box" data-aos="fade-up" data-aos-duration="800">
          <div class="row">
            <div class="col-lg-12">
              <div class="service-main-boxarea">
                <div class="service-images">
                  <div class="img1">
<img src="<?php echo e($item->photo); ?>" alt="Service Image">
                  </div>
                  <div class="text font_color_main_home">
                    <a  style="font-family: 'Cairo'; line-height: 1.5;" href="<?php echo e(route('show.services.details',$item->id)); ?>">
<?php echo e($item->title); ?></a>
                  </div>
                </div>
<div class="pera m-0 m-lg-5">


<p >
    <strong>
    <?php echo str_replace("\n", '<br class="d-lg-block d-none" />', e($item->des)); ?>

    </strong>
</p>
                </div>
                <div class="arrow">
                  <a href="<?php echo e(route('show.services.details',$item->id)); ?>"
                    ><i class="fa-solid fa-arrow-left"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>



    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>








        <div class="row">
          <div class="col-lg-12">
            <div class="space50"></div>
            <div class="bnt-area1 text-center">
              <a href="<?php echo e(route('show.services')); ?>" class="header-btn17" style="font-family: 'Cairo'">
                مشاهدة جميع الخدمات
                <span><i class="fa-solid fa-arrow-left"></i></span
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== SOLUTION AREA STARTS =======-->
    <div class="solution-section-slider-area sp1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="soluion-header heading15">
              <div class="main-content">
                <h2 class="font_color_main_home" style="font-family: 'Cairo'"><?php echo e($home[3]->title); ?></h2>


                  <p

                  class="font_color_normal_home"
                  data-aos="fade-right" dir="rtl"
   style="
       text-align: right;
       font-weight: bold;
       font-size: 18px;
       line-height: 1.8;
       display: -webkit-box;
       -webkit-line-clamp: 3;
       -webkit-box-orient: vertical;
       overflow: hidden;
   ">
            <?php echo e($home[3]->des); ?>

            </p>

            <div class="btn-area1" data-aos="fade-right" data-aos-duration="1200">
            <br>
            <a href="<?php echo e(route('show.portfolio')); ?>" style="font-family: 'Cairo'" class="header-btn17">
              المزيد عن أعمال الشركة
              <span><i class="fa-solid fa-arrow-left"></i></span>
            </a>
          </div>

              </div>
              <div class="auhtor-area">
                <div class="content">
                  <h2  class="font_color_main_home"><span class="counter"><?php echo e($mainCounter[3]->counter); ?></span>+</h2>
                  <p  class="font_color_normal_home"><?php echo e($mainCounter[3]->title); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="solution-slider-area owl-carousel">


                 <?php $__currentLoopData = $companywork; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="images-content-area">
                <div class="img1">
                    <img src=" <?php echo e($item->photo); ?>" alt="Solution Image">

                </div>

                <div class="content-area heading15 w-100" >
                  <a  class="font_color_main_home"  style="font-family: 'Cairo'" href="<?php echo e(route('show.portfolio.details',$item->id)); ?>"><?php echo e($item->title); ?></a>
                  <div class="space20"></div>
                 <p   class="font_color_normal_home" style="
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    text-overflow: ellipsis;
">
    <?php echo e($item->des); ?>

</p>
                  <div class="space32"></div>
                  <a href="<?php echo e(route('show.portfolio.details',$item->id)); ?>" class="readmore"
                    >المزيد <i class="fa-solid fa-arrow-left"></i
                  ></a>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>












            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-lg-12">
            <div class="space50"></div>
            <div class="bnt-area1 text-center">
              <a style="font-family: 'Cairo'" href="<?php echo e(route('show.portfolio')); ?>" class="header-btn17">
                مشاهدة جميع الأعمال
                <span><i class="fa-solid fa-arrow-left"></i></span
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--===== SOLUTION AREA ENDS =======-->

    <!--===== PRICING AREA STARTS =======-->
    <div class="pricing10-section-area sp2">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="pricing-header text-center heading15">
            <h5 >خطة التسعير</h5>
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
          <div class="row">
          <div class="col-lg-12">
            <div class="space50"></div>
            <div class="bnt-area1 text-center">
              <a style="font-family: 'Cairo'" href="<?php echo e(route('show.all.planne.user')); ?>" class="header-btn17">
                مشاهدة جميع الخطط
                <span><i class="fa-solid fa-arrow-left"></i></span
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===== PRICING AREA ENDS =======-->

    <!--===== TEAM AREA STARTS =======-->
    <div class="team10-section-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="team2-header-area text-center heading15">
          <h5>فريقنا</h5>
          <h2  class="font_color_main_home" style="font-family: 'Cairo'">فريق العمل</h2>
        </div>
      </div>
    </div>

    <div class="row">
      
      <?php $__currentLoopData = $teamWork; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-duration="800">
          <div class="team-boxarea team-member"
               data-name="<?php echo e($item->name); ?>"
               data-position="<?php echo e($item->position); ?>"
               data-photo="<?php echo e(asset($item->photo)); ?>"
               data-description="<?php echo e($item->des); ?>">
            <div class="img1">
              <img src="<?php echo e($item->photo); ?>" alt="Team Member">
            </div>
            <div class="content">
              <a  class="font_color_main_home" href="javascript:void(0)"><?php echo e($item->name); ?></a>
              <p  class="font_color_normal_home"><?php echo e($item->position); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    

    <div class="btn-area1 text-center" data-aos="fade-right" data-aos-duration="1200">
  <br>
  <a href="<?php echo e(route('show.team.work')); ?>" style="font-family: 'Cairo'" class="header-btn17">
      المزيد عن فريق العمل
    <span><i class="fa-solid fa-arrow-left"></i></span>
  </a>
</div>
  </div>
</div>



    <!--===== TESTIMONIAL AREA ENDS =======-->

    <div class="slider-section-area sp5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2">
            <div class="sldier-head">
              <p  class="font_color_normal_home" style="font-family: 'Cairo'">عملاء الشركة <br class="d-lg-block d-none" /></p>
            </div>
          </div>
       <div class="col-lg-10">
    <div class="slider-images-area owl-carousel owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-726px, 0px, 0px); transition: 2s; width: 2360px;">


                            <?php $__currentLoopData = $companyClient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="owl-item cloned" style="width: 151.5px; margin-right: 30px">
                    <div class="img1">
                        <img src="<?php echo e($item->photo); ?>" alt="Brand Image 2">
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
        <div class="owl-nav disabled">
            <button type="button" role="presentation" class="owl-prev">
                <span aria-label="Previous">‹</span>
            </button>
            <button type="button" role="presentation" class="owl-next">
                <span aria-label="Next">›</span>
            </button>
        </div>
        <div class="owl-dots disabled"></div>
    </div>

</div>

     <div class="row">
          <div class="col-lg-12">
            <div class="space50"></div>
            <div class="bnt-area1 text-center">
              <a style="font-family: 'Cairo'" href="<?php echo e(route('show.client')); ?>" class="header-btn17">
                  جميع العملاء
                <span><i class="fa-solid fa-arrow-left"></i></span
              ></a>
            </div>
          </div>
        </div>

        </div>

      </div>

    </div>



    <!--===== BLOG AREA STARTS =======-->
<div class="blog13-section-area sp2">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 m-auto">
             <div class="blog4-header text-center heading15">
              <h5 data-aos="fade-up" data-aos-duration="1000">الأخبار</h5>
              <h2  class="font_color_main_home" style="font-family: 'Cairo'">أحدث الاخبار</h2>
            </div>
          </div>
      </div>
      <div class="row">


  <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
          <div class="blog-auhtor-boxarea">
            <ul>
              <li><a  class="font_color_main_home" href="#"><i class="fa-solid fa-calendar-days"></i><?php echo e($item->created_at->diffForHumans()); ?></a></li>
            </ul>
            <div class="space24"></div>
            <div class="img1 image-anime">
                <img src="<?php echo e(asset( $item->photo )); ?>" alt="">
             </div>
            <div class="blog-content-area">
              <div class="space24"></div>
              <a  class="font_color_main_home" href="<?php echo e(route('show.news.details',$item->id)); ?>" style="font-family: 'Cairo'"> <?php echo e($item->title); ?></a>
              <div class="space16"></div>
              <p  class="font_color_normal_home" style="
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 5;
    overflow: hidden;
    text-overflow: ellipsis;
">   <?php echo e($item->des); ?></p>
              <div class="space24"></div>
              <a href="<?php echo e(route('show.news.details',$item->id)); ?>" class="readmore">المزيد<i class="fa-solid fa-arrow-left"></i></a>
            </div>
          </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
       <div class="row">
          <div class="col-lg-12">
            <div class="space50"></div>
            <div class="bnt-area1 text-center">
              <a style="font-family: 'Cairo'" href="<?php echo e(route('show.news')); ?>" class="header-btn17">
                  جميع الأخبار
                <span><i class="fa-solid fa-arrow-left"></i></span
              ></a>
            </div>
          </div>
        </div>
  </div>

</div>



    <!--===== CTA AREA STARTS =======-->
    <div class="cta10-section-area">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="images reveal image-anime">
                <img src="<?php echo e($home[4]->photo); ?>" alt="CTA Image">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="cta-content-area">
                <h2 style="font-family: 'Cairo'">
                    <?php echo e($home[4]->title); ?>

                </h2>
                <div class="space16"></div>
                <p class="line-height: 1.8;">
                    <strong>
                  <?php echo e($home[4]->des); ?>

                  </strong>
                </p>
                <div class="space32"></div>

            </div>
        </div>
    </div>
</div>

    </div>
    <!--===== CTA AREA ENDS =======-->



<!-- Team Modal -->
<div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-header" style="border-bottom: none;">
        <h5 class="modal-title" id="teamModalLabel" style="font-family: 'Cairo', sans-serif; font-weight: bold;"></h5>
      </div>
      <div class="modal-body d-flex flex-wrap">
        <div class="col-md-5 text-center mb-3">
          <img id="teamModalImg" src="" alt="" class="img-fluid rounded" style="max-height: 250px; object-fit: cover;">
        </div>
        <div class="col-md-7">
          <h4 id="teamModalPosition" style="color: #ED7032; font-weight: bold;"></h4>
          <p id="teamModalDescription" style="line-height: 1.8;"></p>
        </div>
      </div>
      <div class="modal-footer" style="border-top: none; justify-content: flex-end;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-family: 'Cairo', sans-serif;">
          إغلاق
        </button>
      </div>
    </div>
  </div>
</div>


<!-- Script to handle modal -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const members = document.querySelectorAll(".team-member");
    const modal = new bootstrap.Modal(document.getElementById("teamModal"));

    members.forEach(member => {
        member.addEventListener("click", () => {
            document.getElementById("teamModalLabel").innerText = member.dataset.name;
            document.getElementById("teamModalPosition").innerText = member.dataset.position;
            document.getElementById("teamModalImg").src = member.dataset.photo;
            document.getElementById("teamModalDescription").innerText = member.dataset.description;
            modal.show();
        });
    });
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/index.blade.php ENDPATH**/ ?>