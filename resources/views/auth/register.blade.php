@extends('layouts.main_layout')
@section('content')

<div class="container pt-5 pe-5">

    <form action="{{route('users.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> اسم المستخدم </label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="اسم المستخدم">
            @error('name')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label"> رقم جوال المستخدم </label>
            <input type="text" name="phone" class="form-control" value="{{old('phone')}}" id="phone" placeholder=" رقم جوال المستخدم ">
            @error('phone')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <div class="mb-3">
            <label for="email" class="form-label"> البريد الالكتروني </label>
            <input type="text" name="email" class="form-control" value="{{old('email')}}" id="email" placeholder=" البريد الالكتروني ">
            @error('email')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label"> كلمة المرور </label>
            <input type="password" name="password" class="form-control"  id="password" placeholder="  كلمة المرور ">
            @error('password')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password_confirmation" class="form-label"> تأكيد كلمة المرور </label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder=" تأكيد كلمة المرور ">
            @error('password_confirmation')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

        <div class="btn-group d-flex gap-4">
            <button class="btn btn-primary my-bg-grad w-50" type="submit"> إضافة  </button>
            <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('users.index')}}">تراجع</a>
        </div>


    </form>
</div>

@endsection
