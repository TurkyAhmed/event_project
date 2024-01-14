@extends('layouts.main_layout_without_nav')
@section('content')

<style>
    body{
        display: flex;
        justify-content: center;
        min-height: 100vh;
        align-items: center;

    }
</style>

    {{-- <x-guest-layout> --}}
        <x-authentication-card>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

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

