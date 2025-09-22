@php
    $colors = \App\Models\SiteColor::first();
@endphp



<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>المقام ميديا</title>

@php
    $socialMedia = \App\Models\SocialMedia::latest()->get();
@endphp

        <!-- Meta Pixel Code -->
{{-- <script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2286018608511604');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2286018608511604&ev=PageView&noscript=1"
/></noscript> --}}

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');

  fbq('init', '{{ config('services.facebook.pixel_id') }}');
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id={{ config('services.facebook.pixel_id') }}&ev=PageView&noscript=1" />
</noscript>
<!-- End Meta Pixel Code -->

<!-- End Meta Pixel Code -->


    <!--=====FAB ICON=======-->
    <!-- <link
      rel="shortcut icon"
      href="../assets/img/logo/fav-logo9.png"
      type="image/x-icon"
    /> -->
<style>
    :root {
        --primary-color: {{ $colors->primary_color ?? '#ED7032' }};
        --secondary-color: {{ $colors->secondary_color ?? '#000000' }};
        --font-color: {{ $colors->font_color ?? '#FFFFFF' }};
    }
</style>

<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}" />

<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/aos.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/mobile.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/owlcarousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick-slider.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


    <!--=====  JS SCRIPT LINK =======-->
    {{-- <script src="assets/js/plugins/jquery-3-6-0.min.js"></script> --}}

    <script src="{{ asset('frontend/assets/js/plugins/jquery-3-6-0.min.js') }}"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
      rel="stylesheet"
    />

    <style>
        .active-link {
    color: orangered !important;
    font-weight: bold;
        /* border-bottom: 1px solid orangered; */

}
    </style>

  </head>
  <body class="homepage10-body">
    <!--===== PRELOADER STARTS =======-->
    <!-- <div class="preloader preloader10">
      <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon">
          <img src="../assets/img/logo/preloader9.png" alt="" />
        </div>
      </div>
    </div> -->
    <!--===== PRELOADER ENDS =======-->

    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
      <div class="progress-wrap">
        <svg
          class="progress-circle svg-content"
          width="100%"
          height="100%"
          viewBox="-1 -1 102 102"
        >
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
      </div>
    </div>
    <!--===== PROGRESS ENDS=======-->

    <!--=====HEADER START=======-->
    <header class="homepage10-body">
      <div
        class="header-area homepage10 header header-sticky d-none d-lg-block"
        id="header"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="header-elements">
                <div class="site-logo">
                 <a href="{{ url('/') }}">
    <img src="{{ asset('frontend/assets/img/logo/logo11.png') }}" alt="Website Logo" width="100">
</a>

                </div>
                <div class="main-menu">
                  <ul>



                    <li>
  <a href="{{route('show.home')}}"

style="font-family: 'Cairo', sans-serif; font-weight: 700;"
     class="{{ request()->routeIs('show.home') ? 'active-link' : '' }}">
     الرئيسية
  </a>
</li>

<li>
  <a href="{{route('show.about')}}"
  style="font-family: 'Cairo', sans-serif; font-weight: 700;"
     class="{{ request()->routeIs('show.about') ? 'active-link' : '' }}">
     عن الشركة
  </a>
</li>



<li>
  <a href="{{route('show.gallery')}}"
  style="font-family: 'Cairo', sans-serif; font-weight: 700;"
     class="{{ request()->routeIs('show.gallery') ? 'active-link' : '' }}">
      معرض الصور
  </a>
</li>

<li>
  <a href="{{route('show.services')}}"
  style="font-family: 'Cairo', sans-serif; font-weight: 700;"
     class="{{ request()->routeIs('show.services') ? 'active-link' : '' }}">
     خدماتنا
  </a>
</li>

<li>
  <a href="{{route('show.portfolio')}}"
  style="font-family: 'Cairo', sans-serif; font-weight: 700;"
     class="{{ request()->routeIs('show.portfolio') ? 'active-link' : '' }}">
     أعمالنا
  </a>
</li>

<li>
  <a href="{{route('show.client')}}"
  style="font-family: 'Cairo', sans-serif; font-weight: 700;"
     class="{{ request()->routeIs('show.client') ? 'active-link' : '' }}">
     العملاء
  </a>
</li>

<li>
  <a href="{{route('show.contactus')}}"
  style="font-family: 'Cairo', sans-serif; font-weight: 700;"
     class="{{ request()->routeIs('show.contactus') ? 'active-link' : '' }}">
     تواصل معنا
  </a>
</li>

{{-- <li>

    <a href="{{route('show.news')}}"
    style="font-family: 'Cairo', sans-serif; font-weight: 700;"
     class="{{ request()->routeIs('show.news') ? 'active-link' : '' }}">
      أخبار الشركة
  </a>
</li> --}}


                    <!-- <li>
                      <a href="#"
                        >Blogs <i class="fa-solid fa-angle-down"></i
                      ></a>
                      <ul class="dropdown-padding">
                        <li><a href="blog.html">Blog One</a></li>
                        <li><a href="blog-left.html">Blog Left</a></li>
                        <li><a href="blog-right.html">Blog Right</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"
                        >Pages <i class="fa-solid fa-angle-down"></i
                      ></a>
                      <ul class="dropdown-padding">
                        <li><a href="case.html">Case Study</a></li>
                        <li>
                          <a href="case-single.html">Case Study Single</a>
                        </li>
                        <li><a href="team.html">Our Team</a></li>
                        <li><a href="pricing.html">Pricing Plan</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li> -->
                  </ul>
                </div>
                <div class="btn-area">
                  <!-- <div class="search-icon header__search header-search-btn">
                    <a href="#"
                      ><img src="../assets/img/icons/search-icon3.svg" alt=""
                    /></a>
                  </div> -->
                  <a href="{{route('show.user.login')}}" class="header-btn17" style="font-family: 'Cairo', sans-serif; font-weight: 700;">
                    أطلب الخدمة أون لاين


                                        <span><i class="fa-solid fa-arrow-left"></i></span>


                                    </a>
                </div>


                <div class="header-search-form-wrapper">
                  <div class="tx-search-close tx-close">
                    <i class="fa-solid fa-xmark"></i>
                  </div>
                  <div class="header-search-container">
                    <form role="search" class="search-form">
                      <input
                        type="search"
                        class="search-field"
                        placeholder="Search …"
                        value=""
                        name="s"
                      />
                      <button type="submit" class="search-submit">
                        <img src="{{ asset('frontend/assets/img/icons/search-icon3.svg') }}" alt="Search Icon">

                      </button>
                    </form>
                  </div>
                </div>
                <div class="body-overlay"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--=====HEADER END =======-->

    <!--===== MOBILE HEADER STARTS =======-->
    <div class="mobile-header mobile-haeder10 d-block d-lg-none">
      <div class="container-fluid">
        <div class="col-12">
          <div class="mobile-header-elements">
            <div class="mobile-logo">
           <a href="{{ url('/') }}">
    <img src="{{ asset('frontend/assets/img/logo/logo11.png') }}" alt="Website Logo">
</a>

            </div>
            <div class="mobile-nav-icon dots-menu">
              <i class="fa-solid fa-bars"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mobile-sidebar mobile-sidebar10">
      <div class="logosicon-area">
        <div class="logos">
          {{-- <img src="assets/img/logo/logo11.png" alt="" /> --}}
          <img src="{{ asset('frontend/assets/img/logo/logo11.png') }}" alt="Logo" />

        </div>
        <div class="menu-close">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
      <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">
          <li>
            <a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.home')}}" class="{{ request()->routeIs('show.home') ? 'active-link' : '' }}">الرئيسية</a>



          </li>
          <li><a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.about')}}" class="{{ request()->routeIs('show.about') ? 'active-link' : '' }}">عن الشركة</a></li>
          <li><a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.gallery')}}" class="{{ request()->routeIs('show.gallery') ? 'active-link' : '' }}">معرض الصور</a></li>

          <li>
            <a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.services')}}" class="{{ request()->routeIs('show.services') ? 'active-link' : '' }}">خدماتنا</a>

          </li>
          <li>
            <a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.portfolio')}}" class="{{ request()->routeIs('show.portfolio') ? 'active-link' : '' }}">أعمالنا</a>

          </li>
          <li>
            <a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.client')}}" class="{{ request()->routeIs('show.client') ? 'active-link' : '' }}">عملائنا</a>

          </li>
          <li>

         <a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.contactus')}}" class="{{ request()->routeIs('show.contactus') ? 'active-link' : '' }}">تواصل معنا</a>


        </li>


         <li>

         <a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.news')}}" class="{{ request()->routeIs('show.news') ? 'active-link' : '' }}">أخبار الشركة</a>


        </li>


        </ul>

        <div class="allmobilesection">
          <a style="font-family: 'Cairo', sans-serif; font-weight: 700;" href="{{route('show.user.login')}}" class="header-btn17"
            >أطلب الخدمة أون لاين<span><i class="fa-solid fa-arrow-left"></i></span
          ></a>
          <div class="single-footer">
            <h3 style="font-family: 'Cairo', sans-serif; font-weight: 700;">اتصل بنا</h3>
            <div class="footer1-contact-info">
              <div class="contact-info-single">
                <div class="contact-info-icon">
                  <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="contact-info-text">
                  <a href="tel:+3(924)4596512">+96599999</a>
                </div>
              </div>

              <div class="contact-info-single">
                <div class="contact-info-icon">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-info-text">
                  <a href="mailto:info@example.com">info@example.com</a>
                </div>
              </div>

              <div class="single-footer">
                <h3 style="font-family: 'Cairo', sans-serif; font-weight: 700;">العنوان</h3>

                <div class="contact-info-single">
                  <div class="contact-info-icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="contact-info-text">
                    <a href="mailto:info@example.com">
                        الجهراء
                        قطعة
                        شارع
                        مجمع
                    </a>
                  </div>
                </div>
              </div>
              <div class="single-footer">
                <h3 style="font-family: 'Cairo', sans-serif; font-weight: 700;">التواصل الاجتماعي</h3>

                <div class="social-links-mobile-menu">
                  <ul>


                      @foreach($socialMedia as $key => $item)

                    {{-- <li><a href="{{$item->link}}"><img src="{{$item->photo}}" alt="{{$item->title}}"></a></li> --}}

                                        <li><a href="{{$item->link}}"><img src="{{ asset($item->photo)}}" alt="{{$item->title}}"></a></li>

                 {{-- <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/linkedin.svg') }}" alt="LinkedIn"></a></li> --}}

                    {{-- <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/instagram.svg') }}" alt="Instagram"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/linkedin.svg') }}" alt="LinkedIn"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/youtube.svg') }}" alt="YouTube"></a></li> --}}

                    @endforeach
                    {{-- <li>
                      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===== MOBILE HEADER STARTS =======-->
@yield('main')
    <!--===== FOOTER AREA STARTS =======-->
@include('frontend.body.footer')

    <style>
      /* Force all text inside the footer to black */
      .footer10-section-area,
      .footer10-section-area p,
      .footer10-section-area h3,
      .footer10-section-area li,
      .footer10-section-area span {
        color: black !important;
      }

      /* Force all links in the footer to black */
      .footer10-section-area a {
        color: black !important;
        text-decoration: none;
      }

      .footer10-section-area a:hover {
        color: #333 !important;
      }

      /* Make placeholder text in inputs black */
      .footer10-section-area input::placeholder {
        color: black !important;
      }

      .whatsapp-icon {
        position: fixed;
        bottom: 20px; /* distance from bottom */
        left: 20px; /* distance from left */
        width: 60px; /* icon size */
        height: 60px;
        z-index: 1000; /* on top of other elements */
        transition: transform 0.3s;
      }

      .whatsapp-icon img {
        width: 100%;
        height: 100%;
      }

      .whatsapp-icon:hover {
        transform: scale(1.1); /* optional hover effect */
      }
    </style>
    <!--===== FOOTER AREA ENDS =======-->

    <!--===== JS SCRIPT LINK =======-->
   <script src="{{ asset('frontend/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/fontawesome.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/aos.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/counter.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/gsap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/Splitetext.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/sidebar.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/mobilemenu.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/owlcarousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/gsap-animation.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/nice-select.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/slick-slider.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/circle-progress.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <a href="https://wa.me/1234567890" class="whatsapp-icon" target="_blank">
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
        alt="WhatsApp"
      />
    </a>
  </body>
</html>
