
@extends('layouts.main_layout')

@section('content')
<div class="container pt-5">

    <form action="{{route('users.update',$user->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label"> اسم المستخدم </label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" id="name" placeholder="اسم المستخدم">
            @error('name')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label"> رقم المستخدم</label>
            <input type="text" name="phone" class="form-control" value="{{$user->phone}}" id="phone" placeholder=" رقم المستخدم ">
            @error('phone')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label"> البريد الالكتروني </label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}" id="email" placeholder=" البريد الالكتروني  ">
            @error('phone')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <div class="mb-3">
            <label for="password" class="form-label"> كلمة المرور</label>
            <input type="password" name="password" class="form-control" value="{{$user->password}}" id="password" placeholder=" كلمة المرور ">
            @error('phone')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <a href="{{route('users.index')}}">تراجع</a>
          <input type="submit" value="حفظ">
      </form>
</div>

@endsection

