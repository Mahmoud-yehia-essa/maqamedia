<?php $__env->startSection('main'); ?>

<div class="about-header-area" style="background-color: #ED7032">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1 style="font-family: 'Cairo', sans-serif;color:white">تفاصيل الخبر</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="service-details-area py-5" style="width: 100%; background: #f9f9f9;">
    <div class="container-fluid px-5">
        <div class="row justify-content-center">
            <?php if($news): ?>
            <div class="col-lg-10">
                <div class="service-card shadow rounded" style="background: #fff; padding: 50px; margin-bottom: 50px;">

                    
                    <?php if($news->photo): ?>
                    <div class="text-center mb-5">
                        <img src="<?php echo e(asset($news->photo)); ?>" alt="<?php echo e($news->title); ?>"
                             class="img-fluid rounded service-main-img">
                    </div>
                    <?php endif; ?>

                    
                    <h2 class="text-center mb-4" style="font-family: 'Cairo', sans-serif; font-weight: bold; color:#ED7032;">
                        <?php echo e($news->title); ?>

                    </h2>

                    
                    <p class="mb-5" style="font-size: 18px; color:#555; line-height: 1.8; text-align: right;">
                        <strong><?php echo e($news->des); ?></strong>
                    </p>

                    
                    <div class="more-description content-html" style="font-size: 16px; line-height: 1.9; color:#333;">
                        <?php echo $news->more_des; ?>

                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="col-lg-8 text-center">
                <p>لا توجد تفاصيل لهذه الخبر حالياً</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<style>
    /* الصور داخل المحتوى والخدمة */
    .content-html img,
    .service-main-img {
        display: block;
        margin: 20px auto;
        max-width: 100%;
        width: 100%;
        height: auto !important;
        border-radius: 10px;
        object-fit: contain;
        cursor: pointer;
        transition: transform 0.2s ease;
    }
    .content-html img:hover,
    .service-main-img:hover {
        transform: scale(1.02);
    }

    /* الفيديو داخل المحتوى */
    .content-html iframe {
        width: 100% !important;
        max-width: 100%;
        height: auto !important;
        aspect-ratio: 16/9;
        display: block;
        margin: 30px auto;
        border: none;
        border-radius: 12px;
        box-shadow: 0px 5px 25px rgba(0,0,0,0.15);
    }

    /* Popup الخلفية */
    .image-popup {
        display: none;
        position: fixed;
        z-index: 9999;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background: rgba(0, 0, 0, 0.85);
    }
    /* الصورة داخل البوب اب */
    .image-popup-content {
        margin: auto;
        display: block;
        max-width: 90%;
        max-height: 90%;
        border-radius: 12px;
        box-shadow: 0px 5px 25px rgba(0,0,0,0.3);
    }
    /* زر الإغلاق */
    .image-popup-close {
        position: absolute;
        top: 20px;
        right: 35px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }
    .image-popup-close:hover {
        color: #ED7032;
    }

    /* Media Queries للأجهزة الصغيرة */
    @media (max-width: 768px) {
        .service-card {
            padding: 20px !important;
        }

        h2 {
            font-size: 28px !important;
        }

        .content-html p {
            font-size: 16px !important;
        }
    }
</style>


<div id="imagePopup" class="image-popup">
    <span class="image-popup-close">&times;</span>
    <img class="image-popup-content" id="popupImg">
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // تحويل <oembed> إلى iframe
        document.querySelectorAll("oembed[url]").forEach(element => {
            const videoUrl = element.getAttribute("url");
            if(videoUrl.includes("youtube.com")) {
                let iframe = document.createElement("iframe");
                iframe.setAttribute("src", videoUrl.replace("watch?v=", "embed/"));
                iframe.setAttribute("allowfullscreen", "true");
                iframe.setAttribute("frameborder", "0");
                iframe.style.width = "100%";
                iframe.style.aspectRatio = "16/9";
                iframe.style.borderRadius = "12px";
                iframe.style.boxShadow = "0px 5px 25px rgba(0,0,0,0.15)";
                iframe.style.display = "block";
                iframe.style.margin = "30px auto";
                element.parentNode.replaceChild(iframe, element);
            }
        });

        // Popup للصور
        const popup = document.getElementById("imagePopup");
        const popupImg = document.getElementById("popupImg");
        const closeBtn = document.querySelector(".image-popup-close");

        document.querySelectorAll(".content-html img, .service-main-img").forEach(img => {
            img.addEventListener("click", function () {
                popup.style.display = "block";
                popupImg.src = this.src;
            });
        });

        closeBtn.onclick = function () {
            popup.style.display = "none";
        }

        popup.onclick = function (e) {
            if (e.target === popup) {
                popup.style.display = "none";
            }
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/news_single.blade.php ENDPATH**/ ?>