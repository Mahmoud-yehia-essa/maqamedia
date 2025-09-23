<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">

        </div>
        <div>
            <h4 class="logo-text">المقام ميديا</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">الرئيسية</div>
            </a>
        </li>


     <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">ادارة الصفحة الرئيسية</div>
            </a>
            <ul>

                 <li> <a href="{{route('all.home')}}"><i class='bx bx-radio-circle'></i> ادارة عناصر الصفحة</a>
                </li>
                {{-- <li> <a href="{{route('home.edit.header')}}"><i class='bx bx-radio-circle'></i> ادارة الهيدر</a>
                </li> --}}







            </ul>
        </li>


         <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">ادارة العداد </div>
            </a>
            <ul>

                 <li> <a href="{{route('all.counter')}}"><i class='bx bx-radio-circle'></i> ادارة العداد</a>
                </li>
                {{-- <li> <a href="{{route('home.edit.header')}}"><i class='bx bx-radio-circle'></i> ادارة الهيدر</a>
                </li> --}}







            </ul>
        </li>



            <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">ادارة الخدمات</div>
            </a>
            <ul>
                <li> <a href="{{route('all.service')}}"><i class='bx bx-radio-circle'></i>عرض الخدمات</a>
                </li>
                <li> <a href="{{route('add.service')}}"><i class='bx bx-radio-circle'></i>إضافة خدمة جديدة</a>
                </li>





            </ul>
        </li>




         <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">ادارة الأعمال</div>
            </a>
            <ul>
                <li> <a href="{{route('all.work')}}"><i class='bx bx-radio-circle'></i>عرض الأعمال</a>
                </li>
                <li> <a href="{{route('add.work')}}"><i class='bx bx-radio-circle'></i>إضافة عمل جديد</a>
                </li>





            </ul>
        </li>



         <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">ادارة عن الشركة</div>
            </a>
            <ul>
                <li> <a href="{{route('all.about')}}"><i class='bx bx-radio-circle'></i>عرض عن الشركة</a>
                </li>
                <li> <a href="{{route('add.about')}}"><i class='bx bx-radio-circle'></i>إضافة عن الشركة</a>
                </li>





            </ul>
        </li>




        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title"> تواصل معنا</div>
            </a>
            <ul>
                <li> <a href="{{route('all.contact.us')}}"><i class='bx bx-radio-circle'></i>عرض كل الرسائل</a>
                </li>
                {{-- <li> <a href="{{route('add.about')}}"><i class='bx bx-radio-circle'></i>إضافة عن الشركة</a>
                </li> --}}





            </ul>
        </li>

        <li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-category"></i></div>
        <div class="menu-title">ادارة العملاء</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('all.company_clients') }}">
                <i class='bx bx-radio-circle'></i>عرض العملاء
            </a>
        </li>
        <li>
            <a href="{{ route('add.company_client') }}">
                <i class='bx bx-radio-circle'></i>إضافة عميل جديد
            </a>
        </li>
    </ul>
</li>


<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-news"></i></div>
        <div class="menu-title">ادارة الأخبار</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('all.news') }}">
                <i class='bx bx-radio-circle'></i>عرض الأخبار
            </a>
        </li>
        <li>
            <a href="{{ route('add.news') }}">
                <i class='bx bx-radio-circle'></i>إضافة خبر جديد
            </a>
        </li>
    </ul>
</li>







        {{-- <li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-category"></i></div>
        <div class="menu-title">ادارة مسيرة الشركة</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('all.journeys') }}">
                <i class='bx bx-radio-circle'></i>عرض المسيرة
            </a>
        </li>
        <li>
            <a href="{{ route('add.journey') }}">
                <i class='bx bx-radio-circle'></i>إضافة مسيرة جديدة
            </a>
        </li>
    </ul>
</li> --}}



<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-image"></i></div>
        <div class="menu-title">إدارة المعرض</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('all.gallery') }}">
                <i class='bx bx-radio-circle'></i>عرض المعرض
            </a>
        </li>
        <li>
            <a href="{{ route('add.gallery') }}">
                <i class='bx bx-radio-circle'></i>إضافة معرض جديد
            </a>
        </li>
    </ul>
</li>




<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-category"></i></div>
        <div class="menu-title">ادارة الخطط</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('all.plans') }}">
                <i class='bx bx-radio-circle'></i>عرض الخطط
            </a>
        </li>
        <li>
            <a href="{{ route('add.plan') }}">
                <i class='bx bx-radio-circle'></i>إضافة خطة جديدة
            </a>
        </li>


         <li>
            <a href="{{ route('all.user.plans') }}">
                <i class='bx bx-radio-circle'></i>عرض الأعضاء المسجلين في الخطة
            </a>
        </li>

    </ul>
</li>


<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-group"></i></div>
        <div class="menu-title">إدارة الفريق</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('all.teamworks') }}">
                <i class='bx bx-radio-circle'></i>عرض الفريق
            </a>
        </li>
        <li>
            <a href="{{ route('add.teamwork') }}">
                <i class='bx bx-radio-circle'></i>إضافة عضو جديد
            </a>
        </li>
    </ul>
</li>



<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-phone"></i></div>
        <div class="menu-title">اتصل بنا</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('contact.info') }}">
                <i class='bx bx-radio-circle'></i> إدارة معلومات الاتصال
            </a>
        </li>
    </ul>
</li>




<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-group"></i></div>
        <div class="menu-title">التحكم في الوان الموقع</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('site.colors') }}">
                <i class='bx bx-radio-circle'></i> ادارة الألوان
            </a>
        </li>

    </ul>
</li>




<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-share-alt"></i></div>
        <div class="menu-title">وسائل التواصل</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('all.social_media') }}">
                <i class='bx bx-radio-circle'></i>عرض الوسائل
            </a>
        </li>
        <li>
            <a href="{{ route('add.social_media') }}">
                <i class='bx bx-radio-circle'></i>إضافة وسيلة جديدة
            </a>
        </li>
    </ul>
</li>



<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-briefcase"></i></div>
        <div class="menu-title">إدارة خدمات المستخدمين</div>
    </a>
    <ul>
        <li>
            <a href="{{ route('all.user_services') }}">
                <i class='bx bx-radio-circle'></i>عرض جميع الخدمات
            </a>
        </li>
        <li>
            <a href="{{ route('add.user_service') }}">
                <i class='bx bx-radio-circle'></i>إضافة خدمة جديدة
            </a>
        </li>
    </ul>
</li>



{{--
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">الفئات الرئيسية</div>
            </a>
            <ul>
                <li> <a href="{{route('all.category')}}"><i class='bx bx-radio-circle'></i>عرض الفئات</a>
                </li>
                <li> <a href="{{route('add.category')}}"><i class='bx bx-radio-circle'></i>إضافة الفئات</a>
                </li>





            </ul>
        </li> --}}


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="person-outline"></ion-icon>

                </i>
                </div>

                <div class="menu-title"> إدارة المستخدمين</div>
            </a>
            <ul>


                  <li> <a href="{{route('add.user')}}"><i class='bx bx-radio-circle'></i>إضافة مستخدم جديد</a>
                </li>
                 {{-- <li> <a href="{{route('all.owners')}}"><i class='bx bx-radio-circle'></i>عرض الملاك</a>
                </li> --}}


                <li> <a href="{{route('all.users')}}"><i class='bx bx-radio-circle'></i>عرض المستخدمين</a>
                </li>

                 <li> <a href="{{route('all.admin')}}"><i class='bx bx-radio-circle'></i>عرض المديرين</a>
                </li>






            </ul>
        </li>















        {{-- <li>
            <a href="{{route('add.ads')}}">
                <div class="parent-icon">
                    <ion-icon name="megaphone-outline"></ion-icon>

                </div>
                <div class="menu-title">ادارة الإعلانات</div>
            </a>
        </li> --}}


        {{-- <li>
            <a href="{{route('report.view')}}">
                <div class="parent-icon">
                    <ion-icon name="stats-chart-outline"></ion-icon>

                </div>
                <div class="menu-title">الاحصائيات</div>
            </a>
        </li> --}}


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="notifications-outline"></ion-icon>
                </div>

                <div class="menu-title">ادارة الإشعارات</div>
            </a>
            <ul>
                <li> <a href="{{route('all.notification')}}"><i class='bx bx-radio-circle'></i>عرض الاشعارات</a>
                </li>
                <li> <a href="{{route('send.notification')}}"><i class='bx bx-radio-circle'></i>ارسال اشعار جديد</a>
                </li>





            </ul>
        </li>




            <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><ion-icon name="happy-outline"></ion-icon></i>
                </div>
                <div class="menu-title">ادارة الكوبونات</div>
            </a>
            <ul>

                <li> <a href="{{ route('all.coupon') }}"><i class="bx bx-right-arrow-alt"></i>جميع الكوبونات</a>
                </li>


                <li> <a href="{{ route('add.coupon') }}"><i class="bx bx-right-arrow-alt"></i>إضافة كوبون</a>
                </li>


            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
<ion-icon name="phone-portrait-outline"></ion-icon>
                </div>

                <div class="menu-title">ادارة التطبيق</div>
            </a>
            <ul>
                <li> <a href="{{route('add.versions')}}"><i class='bx bx-radio-circle'></i>اعدادات التطبيق</a>
                </li>






            </ul>
        </li>








    </ul>
    <!--end navigation-->
</div>
