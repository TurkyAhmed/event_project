@extends('layouts.main_layout_without_nav')
@section('content')

    {{-- <x-guest-layout> --}}
        <x-authentication-card>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <section class="hero">
                <div class="header">

                    <div class="col-md-6 px-0 text_hero ">
                        <h1 class="display-4 fst-italic"> حدث تايم <span class="display-6">حيث تبدأ</span></h1>
                        <div class="d-flex">
                            <p class="lead my-3 display-6">   كل الفعاليات  </p>
                            <pre>  </pre>
                            <p class="lead my-3 display-6 typing"></p>
                        </div>


                        <h1 id="typed-text"></h1>
                        <h1 id="typed-text"></h1>
                    </div>

                    {{-- <img src="{{asset('assets/imgs/hero.png')}}" alt=""> --}}
                    <!--Waves Container-->
                    <div class="svg">
                        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                          <defs>
                            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                        </defs>
                        <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(27,97,125,1)" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.3)" />

                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                        </g>
                        </svg>
                    </div>
                    <!--Waves end-->

                </div>
            </section>

            <form method="POST" action="{{ route('login') }}" class="auth_form">
                @csrf
                <h4 class="text-center pt-3 mb-5"> تسجيل الخول </h4>

                <label for="email" class="form-label pe-3">البريد الالكتروني</label>
                <div class="input-group mb-3">
                    <span class="input-group-text rounded-0 rounded-end text_primary" id="basic-addon1">@</span>
                    <input type="text" id="email" name="email" class="form-control rounded-0 rounded-start my-input-text" target="ltr" placeholder="Email ">
                </div>

                <label for="password" class="form-label pe-3"> كلمة المرور</label>
                <div class="input-group mb-2">
                    <span class="input-group-text rounded-0 rounded-end text_primary" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" id="password" name="password" class="form-control rounded-0 rounded-start my-input-text" target="ltr" placeholder="password ">
                </div>
                <p><a href="#" class="decoration-none" > نسيت كلمة المرور </a></p>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mx-auto mb-5"> تسجيل الدخول </button>
                </div>

                <p class="text-center mb-0"><a href="{{route('register')}}" class="decoration-none " >  ليس لي حساب؟ اشتراك </a></p>

            </form>


        </x-authentication-card>
    {{-- </x-guest-layout> --}}

@endsection

