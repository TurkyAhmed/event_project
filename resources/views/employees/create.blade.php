
@extends('layouts.main_layout')

@section('content')
<div class="container pt-5">

    <form action="{{route('employees.store')}}" method="post">
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
            <label for="address" class="form-label"> عنوان الموظف</label>
            <input type="text" name="address" class="form-control" value="{{old('address')}}" id="address" placeholder=" رقم جوال المستخدم ">
            @error('address')
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
            <input type="text" name="password" class="form-control" value="{{old('password')}}" id="password" placeholder="  كلمة المرور ">
            @error('password')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <button type="submit" > إضافة خدمة</button>
      </form>
</div>

@endsection

