@extends('frontend.master_dashboard')
@section('main')

<div class="about-header-area" style="background-color: #ED7032" >
    {{-- <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1"> --}}
    {{-- <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5"> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1 style="font-family: 'Cairo', sans-serif;color:white">تفاصيل الخدمة</h1>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Full width service details --}}
<div class="service-details-area py-5" style="width: 100%; background: #f9f9f9;">
    <div class="container-fluid px-5">
        <div class="row justify-content-center">
            @if($service)
            <div class="col-lg-10">
                <div class="service-card shadow rounded" style="background: #fff; padding: 50px; margin-bottom: 50px;">

                    {{-- Service Image --}}
                    @if($service->photo)
                    <div class="text-center mb-5">
                        <img src="{{ asset($service->photo) }}" alt="{{ $service->title }}"
                             class="img-fluid rounded service-main-img"
                             style="max-height: 300px;">
                    </div>
                    @endif

                    {{-- Service Title --}}
                    <h2 class="text-center mb-4" style="font-family: 'Cairo', sans-serif; font-weight: bold; color:#ED7032; font-size: 42px;">
                        {{ $service->title }}
                    </h2>

                    {{-- Short Description --}}
                    <p class=" mb-5" style="font-size: 18px;  text-align: right; color:#555; line-height: 1.8;">
                        {{ $service->des }}
                    </p>

                    {{-- More Description (HTML content) --}}
                    <div class="more-description content-html" style="font-size: 16px; line-height: 1.9; color:#333;">
                        {!! $service->more_des !!}
                    </div>
                </div>
            </div>
            @else
            <div class="col-lg-8 text-center">
                <p>لا توجد تفاصيل لهذه الخدمة حالياً</p>
            </div>
            @endif
        </div>
    </div>
</div>

{{-- Styles --}}
<style>
    /* الصور داخل المحتوى والخدمة */
    .content-html img,
    .service-main-img {
        display: block;
        margin: 20px auto;
        max-width: 70%;
        width: auto;
        height: auto !important;
        max-height: 300px;
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
        width: 60% !important;
        max-width: 100%;
        height: 500px !important;
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
</style>

{{-- HTML Popup --}}
<div id="imagePopup" class="image-popup">
    <span class="image-popup-close">&times;</span>
    <img class="image-popup-content" id="popupImg">
</div>

{{-- Script --}}
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
                iframe.style.width = "60%";
                iframe.style.height = "500px";
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

@endsection
