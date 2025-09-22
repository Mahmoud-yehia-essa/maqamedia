 <div class="footer10-section-area">
   <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="footer-logo-area">

                <img src="<?php echo e(asset($home[4]->photo)); ?>" alt="Logo">
                <p>
                    <?php echo e($home[4]->title); ?>

                </p>
                <ul>

                <?php $__currentLoopData = $socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <li><a href="<?php echo e($item->link); ?>"><img src="<?php echo e(asset($item->photo)); ?>" alt="<?php echo e($item->title); ?>"></a></li>
                    

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="footer-logo-area1">
                <h3 style="font-family: 'Cairo', sans-serif;">الروابط</h3>
                <ul>
                    <li><a href="<?php echo e(route('show.home')); ?>">الرئيسية</a></li>
                    <li><a href="<?php echo e(route('show.about')); ?>">عن الشركة</a></li>
                    <li><a href="<?php echo e(route('show.gallery')); ?>">معرض الصور</a></li>
                    <li><a href="<?php echo e(route('show.services')); ?>">خدماتنا</a></li>
                    <li><a href="<?php echo e(route('show.portfolio')); ?>">أعمالنا</a></li>
                    <li><a href="<?php echo e(route('show.client')); ?>">العملاء</a></li>
                     <li><a href="<?php echo e(route('show.news')); ?>">الأخبار</a></li>
                    <li><a href="<?php echo e(route('show.all.planne.user')); ?>">الخطط</a></li>
                    <li><a href="<?php echo e(route('show.contactus')); ?>">تواصل معنا</a></li>



                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="footer-logo-area2">
                <h3 style="font-family: 'Cairo', sans-serif;">العنوان</h3>
                <ul>
                    <li>
                        <a href="mailto:info@info.com">
                            <img src="<?php echo e(asset('frontend/assets/img/icons/email.svg')); ?>" alt="Email">
                            <span>info@info.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo e(asset('frontend/assets/img/icons/location.svg')); ?>" alt="Location">
                            <span>العنوان <br class="d-lg-block d-none" />العنوان <br class="d-lg-block d-none" />رقم الهاتف</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:123-456-7890">
                            <img src="<?php echo e(asset('frontend/assets/img/icons/phone.svg')); ?>" alt="Phone">
                            <span>123-456-7890</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        

         <div class="col-lg-4 col-md-6">
           <a href="<?php echo e(route('show.user.login')); ?>" class="footer-logo-area3 text-decoration-none d-block">
    <h3 class="mb-4" style="font-family: 'Cairo', sans-serif;">اطلب الخدمة اون لاين الأن</h3>
    <button class="header-btn17" style="font-family: 'Cairo', sans-serif;">
        سجل الدخول الأن <span><i class="fa-solid fa-arrow-left"></i></span>
    </button>
</a>
        </div>
    </div>

    <div class="space80 d-lg-block d-none"></div>
    <div class="space40 d-lg-none d-block"></div>

    <div class="row">
        <div class="col-lg-12">
            <div class="copyright-area">
                <div class="pera">
                    <p>ⓒشركة المقام جميع الحقوق محفوظة</p>
                </div>
                <ul>
                    <li><a href="#">الشروط والأحكام</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    </div>
<?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/body/footer.blade.php ENDPATH**/ ?>