<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
 </head>
 <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                حدث تايم
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
                  <a class="nav-link" href="#"> الأسئلة الشائعة </a>
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
    </nav>

    <main>

  @yield('content')

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
 </html>
