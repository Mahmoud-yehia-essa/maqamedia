<?php $__env->startSection('main'); ?>

<!--===== HEADER AREA =====-->
<div class="about-header-area" style="background-color: #ED7032" >
        

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="about-inner-header heading9">

                   <h1 style="font-family: 'Cairo', sans-serif;color:white">عملائنا</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!--===== CLIENTS SECTION =====-->
<div class="clients-section  py-5 sp2" style="padding: 80px 0; background-color: #f9f9f9;">
    <div class="container">
        <!-- Section Title -->
        

         <div class="row">
            <div class="col-12 text-center">
                <div class="project15-header heading23">

                    <h3 style="font-family: 'Cairo', sans-serif; font-weight: 700; color: #ED7032; margin-bottom: 10px;"><?php echo e($home[6]->title); ?></h3>
                    <div style="width: 60px; height: 3px; background: #ED7032; margin: 12px auto 10px; border-radius: 2px;"></div>

                    <!-- Full width description -->
                    <div style="width: 100%; padding: 0 20px; box-sizing: border-box; margin: 0 auto 20px;">
                        <p data-aos="fade-right" dir="rtl"
                           style="
                               text-align: right;
                               font-weight: bold;
                               font-size: 18px;
                               line-height: 1.8;
                               color:black


                           ">
                            <?php echo e($home[6]->des); ?>

                        </p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Clients Grid -->
        <div class="row g-4">
            <?php $__currentLoopData = $companyClient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
                <div class="client-card text-center p-3 shadow-sm rounded flex-fill d-flex flex-column justify-content-between"
                     style="background: #fff; cursor: pointer; transition: transform 0.3s, box-shadow 0.3s;"
                     data-bs-toggle="modal"
                     data-bs-target="#clientModal<?php echo e($key); ?>">
                    <div class="client-img mb-3" style="overflow: hidden; border-radius: 8px;">
                        <img src="<?php echo e($item->photo); ?>" alt="Client Logo" class="img-fluid" style="max-height: 150px; object-fit: contain; width: 100%;">
                    </div>
                    <div class="client-content mt-auto">
                        <?php if(!empty($item->title)): ?>
                            <h5 style="font-family: 'Cairo', sans-serif; font-weight: 600; color: #333;"><?php echo e($item->title); ?></h5>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Modal -->
<div class="modal fade" id="clientModal<?php echo e($key); ?>" tabindex="-1" aria-labelledby="clientModalLabel<?php echo e($key); ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientModalLabel<?php echo e($key); ?>" style="font-family: 'Cairo', sans-serif; font-weight: 700;"><?php echo e($item->title); ?></h5>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" style="font-family: 'Cairo', sans-serif; font-weight: 600;">
                    اغلاق
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="<?php echo e($item->photo); ?>" alt="Client Image" class="img-fluid mb-3" style="max-height: 400px; object-fit: contain; width: 100%;">
                <?php if(!empty($item->des)): ?>
                    <p style="font-family: 'Cairo', sans-serif; color: #555;"><?php echo e($item->des); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<!--===== STYLES =====-->
<style>
    .client-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(0,0,0,0.15);
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/clients.blade.php ENDPATH**/ ?>