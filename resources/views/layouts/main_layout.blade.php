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
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @stack('style')
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
        <a href="" class="navbar-brand p-0 d-flex flex-row align-items-center">
            <img src="{{asset('assets/imgs/event-logo.png')}}" alt="" width="80" height="80" class="d-inline-block align-text-top">
            <h5>حدث تايم</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="#" class="nav-item nav-link fs-5 active">الرئيسية</a>
                <a href="{{route('halls.landingpageHalls')}}" class="nav-item nav-link fs-5">القاعات</a>
                <a href="#services" class="nav-item nav-link fs-5">الخدمات</a>
                <a href="#" class="nav-item nav-link fs-5">تواصل معنا</a>
                @if(Auth::check())
                    <a href="{{route('reservations.TypeOfReservation')}}" class="nav-item nav-link fs-5"> الحجز </a>
                @endif
            </div>
            <div class="login-bar d-flex justify-content-between">
                @if(Auth::check())
                    {{-- <ul class="navbar-nav">
                        <li class="nav-item"> --}}
                            <a class="nav-item nav-link text-white fs-5" href="{{route('cart.index')}}"><img src="{{asset('assets/imgs/cart-shopping-fast.svg')}}" alt=""></a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-item nav-link btn btn-link text-white fs-5">تسجيل الخروج</button>
                            </form>
                        {{-- <a class="btn btn-primary" href="{{route('profile.show')}}"> profile</a> --}}
                        {{-- </li>
                    </ul> --}}
                @else
                      {{-- <ul class="navbar-nav">
                    <li class="nav-item"> --}}
                        <a class="nav-item nav-link text-white fs-5" href="{{route('register')}}">إشتراك</a>
                    {{-- </li>
                    <li class="nav-item"> --}}
                        <a class="nav-item nav-link text-white fs-5" href="{{route('login')}}"> تسجيل الدخول </a>
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
            <div class="row  text-white pt-3">

                <div class="col-12 col-md-6 col-lg-3">
                    <p class="d-flex align-items-center">
                        <img src="{{asset('assets/imgs/event-logo.png')}}" style="width: 80px" alt="Event Time logo">
                        <span class="fs-3"> حدث تايم </span>
                    </p>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                   <p class="fs-5"> روابط سريعة : </p>
                   <ul class="list-unstyled">
                        <li class="pe-3 fs-6"><a class="text-decoration-none text-white" href="#"> القاعات </a></li>
                        <li class="pe-3 fs-6"><a class="text-decoration-none text-white" href="#"> الخدمات </a></li>
                        <li class="pe-3 fs-6"><a class="text-decoration-none text-white" href="#"> من نحن؟ </a></li>
                   </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <p class="fs-5">  تواصل معنا : </p>
                    <ul class="list-unstyled d-flex gap-2 flex-column">
                         {{-- <li><a class="text-decoration-none text-white fs-4" href="#"> <i class="fab fa-facebook"></i> </a></li> --}}
                         <li class="pe-3"><a class="text-decoration-none text-white fs-6" href="#"> <i class="fa fa-envelope  fs-5"></i> tasg1818@gmail.com</a></li>
                         {{-- <li><a class="text-decoration-none text-white fs-4" href="#"> <i class="fab fa-telegram"></i> </a></li> --}}
                         <li class="pe-3"><a class="text-decoration-none text-white fs-6" href="#"> <i class="fab fa-whatsapp  fs-5"></i>  739531388 967+</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <p class="fs-5">   موقعنا : </p>
                    <p>حضرموت - المكلا - اربعين شقة</p>
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
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.js"></script>
    @stack('scripts')
 </body>
 </html>
