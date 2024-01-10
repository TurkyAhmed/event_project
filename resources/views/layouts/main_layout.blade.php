<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
 <body>

    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-white d-flex align-items-center" href="#">
                <img src="{{asset('assets/imgs/event-logo.png')}}" alt="" width="80" height="80" class="d-inline-block align-text-top">
                <h1>حدث تايم</h1>
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link active me-5" aria-current="page" href="#"> الرئيسية </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">القاعات</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> الخدمات </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">تواصل معنا</a>
                </li>
              </ul>
            </div>
            <div class="login-bar d-flex justify-content-between">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">إشتراك</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> تسجيل الدخول </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg navbar-dark  px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0 d-flex">
            <img src="{{asset('assets/imgs/event-logo.png')}}" alt="" width="80" height="80" class="d-inline-block align-text-top">
            <h1>حدث تايم</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="#" class="nav-item nav-link active">الرئيسية</a>
                <a href="#" class="nav-item nav-link">القاعات</a>
                <a href="#" class="nav-item nav-link">الخدمات</a>
                <a href="#" class="nav-item nav-link">تواصل معنا</a>
            </div>
            <div class="login-bar d-flex justify-content-between">
                @if(Auth::check())
                    {{-- <ul class="navbar-nav">
                        <li class="nav-item"> --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-item nav-link btn btn-link text-white">تسجيل الخروج</button>

                            </form>
                        <a class="btn btn-primary" href="{{route('profile.show')}}"> profile</a>
                        {{-- </li>
                    </ul> --}}
                @else
                      {{-- <ul class="navbar-nav">
                    <li class="nav-item"> --}}
                        <a class="nav-item nav-link text-white" href="{{route('register')}}">إشتراك</a>
                    {{-- </li>
                    <li class="nav-item"> --}}
                        <a class="nav-item nav-link text-white" href="{{route('login')}}"> تسجيل الدخول </a>
                    {{-- </li>
                    </ul> --}}
                @endif
            </div>
        </div>
    </nav>

    <main>

        @yield('content')

    </main>

    <footer>
        <div class="container-fluid bg-liner-black px-5 py-2 mt-3">
            <div class="row  text-white">

                <div class="col-12 col-md-6 col-lg-3">
                    <p class="d-flex align-items-center">
                        <img src="{{asset('assets/imgs/event-logo.png')}}" style="width: 80px" alt="Event Time logo">
                        <span class="fs-3"> حدث تايم </span>
                    </p>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                   <p> روابط سريعة : </p>
                   <ul class="list-unstyled">
                        <li><a class="text-decoration-none text-white" href="#"> القاعات </a></li>
                        <li><a class="text-decoration-none text-white" href="#"> الخدمات </a></li>
                        <li><a class="text-decoration-none text-white" href="#"> من نحن؟ </a></li>
                   </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <p>  تواصل معنا : </p>
                    <ul class="list-unstyled d-flex gap-2">
                         <li><a class="text-decoration-none text-white fs-4" href="#"> <i class="fab fa-facebook"></i> </a></li>
                         <li><a class="text-decoration-none text-white fs-4" href="#"> <i class="fab fa-twitter"></i> </a></li>
                         <li><a class="text-decoration-none text-white fs-4" href="#"> <i class="fab fa-telegram"></i> </a></li>
                         <li><a class="text-decoration-none text-white fs-4" href="#"> <i class="fab fa-whatsapp"></i> </a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <p>   موقعنا : </p>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6448.710933152055!2d49.11199782322345!3d14.529847326651062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3de8e69793c145e7%3A0x55d32bd799340eb6!2z2KPYqNix2KfYrCDYqNmGINmF2K3ZgdmI2Lg!5e0!3m2!1sar!2s!4v1704592186565!5m2!1sar!2s"
                    width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                </div>

            </div>

            <div class="copy-write text-center text-white-50">
                <p>TR17&copy; {{date('Y');}}</p>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
 </body>
 </html>
