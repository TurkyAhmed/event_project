
{{-- @extends('layouts.main_layout')
@section('content') --}}

@extends('dashboard.dashboard')
@section('dashboard-content')

<div class="container pt-5 pe-5">

    <form action="{{route('employees.update',$user_with_employee->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">  اسم الموظف  </label>
            <input type="text" name="name" class="form-control" value="{{$user_with_employee->name}}" id="name" placeholder="اسم الموظف">
            @error('name')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>


          <div class="mb-3">
            <label for="phone" class="form-label">  رقم جوال الموظف </label>
            <input type="text" name="phone" class="form-control" value="{{$user_with_employee->phone}}" id="phone" placeholder=" رقم جوال الموظف " >
            @error('phone')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="address" class="form-label"> عنوان الموظف</label>
            <input type="text" name="address" class="form-control" value="{{$user_with_employee->employee->address}}" id="address" placeholder=" عنوان الموظف ">
            @error('address')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <div class="mb-3">
            <label for="email" class="form-label"> البريد الالكتروني </label>
            <input type="text" name="email" class="form-control" value="{{$user_with_employee->email}}" id="email" placeholder=" البريد الالكتروني ">
            @error('email')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label"> كلمة المرور </label>
            <input type="password" name="password" class="form-control" value="{{$user_with_employee->password}}" id="password" >
            @error('password')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="btn-group d-flex gap-4">
            <button class="btn btn-primary my-bg-grad w-50" type="submit"> حفظ  </button>
            <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('employees.index')}}">تراجع</a>
        </div>
    </form>
</div>

@endsection

