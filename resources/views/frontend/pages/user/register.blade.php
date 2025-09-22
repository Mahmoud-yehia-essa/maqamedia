@extends('frontend.master_dashboard')
@section('main')

<div class="about-header-area" style="background-color: #ED7032" >
    {{-- <img src="{{ asset('frontend/assets/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1"> --}}
    {{-- <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5"> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="about-inner-header heading9 text-center">
                     <h1 style="font-family: 'Cairo', sans-serif;color:white">تسجيل عضو جديد</h1>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow p-5" dir="rtl">
                <h3 class="text-center mb-4">إنشاء حساب جديد</h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('add.user.front.store') }}">
                    @csrf

                    <!-- الاسم الكامل -->
                    <div class="mb-4">
                        <label for="name" class="form-label">الاسم الكامل</label>
                        <input type="text" value="{{old('name')}}" class="form-control form-control-lg" id="name" name="name" placeholder="أدخل اسمك الكامل" required>
                     @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>

                    <!-- رقم الهاتف -->
                    <div class="mb-4">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <input type="tel" class="form-control form-control-lg" id="phone" value="{{old('phone')}}" name="phone" placeholder="أدخل رقم هاتفك" required>
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>

                    <!-- البريد الإلكتروني -->
                    <div class="mb-4">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{old('email')}}" placeholder="أدخل بريدك الإلكتروني" required>

                     @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>

                    <!-- كلمة المرور مع الأيقونة داخل الحقل -->
                <div class="mb-4">
    <label for="password" class="form-label">كلمة المرور</label>
    <div class="position-relative">
        <span class="position-absolute top-50 start-0 translate-middle-y ms-3" id="togglePassword" style="cursor: pointer;">
            <i class="fa-solid fa-eye"></i>
        </span>
        <input type="password" class="form-control form-control-lg ps-5" id="password" name="password" value="{{old('password')}}" placeholder="أدخل كلمة المرور" required>
                     @error('password') <span class="text-danger">{{ $message }}</span> @enderror

    </div>
</div>

                    <!-- زر التسجيل -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-lg" style="background-color: #ED7032; color: white;">
                            تسجيل حساب جديد
                        </button>
                    </div>

                    <!-- رابط تسجيل الدخول -->
                    <p class="text-center">هل لديك حساب بالفعل؟
                        <a href="{{ route('show.user.login') }}" class="text-decoration-none" style="color: #ED7032;">تسجيل الدخول هنا</a>
                    </p>
                </form>

                <!-- رسالة دعائية -->
                <div class="text-center mt-4 p-3 bg-light rounded">
                    <h5 style="color: #ED7032;">اطلب الآن الخدمة أون لاين بكل سهولة</h5>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Font Awesome (لأيقونة العين) -->
<script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

<!-- سكريبت إظهار/إخفاء كلمة المرور -->
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>

@endsection
