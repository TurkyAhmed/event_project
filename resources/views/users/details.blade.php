
@extends('layouts.main_layout')

@section('content')
<div class="container pt-5">

    <form action="{{route('users.edit',$user->id)}}" method="get">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> اسم المستخدم </label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" id="name" placeholder="اسم المستخدم" readonly>
            @error('name')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">  رقم جوال المستخدم </label>
            <input type="text" name="phone" class="form-control" value="{{$user->phone}}" id="phone" placeholder=" رقم جوال المستخدم " readonly>
            @error('phone')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label"> البريد الالكتروني </label>
            <input type="text" name="email" class="form-control" value="{{$user->email}}" id="email" placeholder=" البريد الالكتروني ">
            @error('email')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label"> كلمة المرور </label>
            <input type="password" name="password" class="form-control" value="{{$user->password}}" id="password" >
            @error('password')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <a href="{{route('users.index')}}">تراجع</a>
          <input type="submit" value="تعديل">
      </form>
</div>

@endsection

