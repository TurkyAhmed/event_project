
@extends('layouts.main_layout')

@section('content')
<div class="container pt-5">

    <form action="{{route('employees.edit',$employee->id)}}" method="get">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> اسم الموظف </label>
            <input type="text" name="name" class="form-control" value="{{$employee->name}}" id="name" placeholder="اسم الموظف" readonly>
            @error('name')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">  رقم جوال الموظف </label>
            <input type="text" name="phone" class="form-control" value="{{$employee->phone}}" id="phone" placeholder=" رقم جوال الموظف " readonly>
            @error('phone')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="address" class="form-label"> عنوان الموظف</label>
            <input type="text" name="address" class="form-control" value="{{$employee->address}}" id="address" placeholder=" عنوان الموظف ">
            @error('address')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <div class="mb-3">
            <label for="email" class="form-label"> البريد الالكتروني </label>
            <input type="text" name="email" class="form-control" value="{{$employee->email}}" id="email" placeholder=" البريد الالكتروني ">
            @error('email')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label"> كلمة المرور </label>
            <input type="password" name="password" class="form-control" value="{{$employee->password}}" id="password" >
            @error('password')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <a href="{{route('employees.index')}}">تراجع</a>
          <input type="submit" value="تعديل">
      </form>
</div>

@endsection

