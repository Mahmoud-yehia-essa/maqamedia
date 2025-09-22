 <div class="footer10-section-area">
   <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="footer-logo-area">

                <img src="{{ asset($home[4]->photo) }}" alt="Logo">
                <p>
                    {{$home[4]->title}}
                </p>
                <ul>

                @foreach($socialMedia as $key => $item)


                    <li><a href="{{$item->link}}"><img src="{{ asset($item->photo)}}" alt="{{$item->title}}"></a></li>
                    {{-- <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/instagram.svg') }}" alt="Instagram"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/linkedin.svg') }}" alt="LinkedIn"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/assets/img/icons/youtube.svg') }}" alt="YouTube"></a></li> --}}

                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="footer-logo-area1">
                <h3 style="font-family: 'Cairo', sans-serif;">الروابط</h3>
                <ul>
                    <li><a href="{{route('show.home')}}">الرئيسية</a></li>
                    <li><a href="{{route('show.about')}}">عن الشركة</a></li>
                    <li><a href="{{route('show.gallery')}}">معرض الصور</a></li>
                    <li><a href="{{route('show.services')}}">خدماتنا</a></li>
                    <li><a href="{{route('show.portfolio')}}">أعمالنا</a></li>
                    <li><a href="{{route('show.client')}}">العملاء</a></li>
                     <li><a href="{{route('show.news')}}">الأخبار</a></li>
                    <li><a href="{{route('show.all.planne.user')}}">الخطط</a></li>
                    <li><a href="{{route('show.contactus')}}">تواصل معنا</a></li>



                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="footer-logo-area2">
                <h3 style="font-family: 'Cairo', sans-serif;">العنوان</h3>
                <ul>
                    <li>
                        <a href="mailto:info@info.com">
                            <img src="{{ asset('frontend/assets/img/icons/email.svg') }}" alt="Email">
                            <span>info@info.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/icons/location.svg') }}" alt="Location">
                            <span>العنوان <br class="d-lg-block d-none" />العنوان <br class="d-lg-block d-none" />رقم الهاتف</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:123-456-7890">
                            <img src="{{ asset('frontend/assets/img/icons/phone.svg') }}" alt="Phone">
                            <span>123-456-7890</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6">
            <div class="footer-logo-area3">
                <h3>اشترك في القائمة البريدية ليصلك كل جديد</h3>
                <form action="#">
                    <input type="text" placeholder="Enter Your email" />
                    <button class="header-btn17">
                        اشترك <span><i class="fa-solid fa-arrow-left"></i></span>
                    </button>
                </form>
            </div>
        </div> --}}

         <div class="col-lg-4 col-md-6">
           <a href="{{ route('show.user.login') }}" class="footer-logo-area3 text-decoration-none d-block">
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
