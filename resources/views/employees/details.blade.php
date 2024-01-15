
{{-- @extends('layouts.main_layout')
@section('content') --}}

@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


<div class="container py-5 pe-5 my-bg-img">

    <div class="form-fram">
        <div class="sub-header-page mb-3">
            <h3 class="text-center"> الموظفين </h3>
        </div>

        <form action="{{route('employees.edit',$employee->id)}}" method="get">
          @csrf

          <div class="card">
            <div class="card-header">
              تفاصيل الموظف
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label"> اسم الموظف :</label>
                    <p class="d-inline-block">{{$employee->name}}</p>
                  </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">  رقم جوال الموظف </label>
                    <p class="d-inline-block">{{$employee->phone}}</p>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label"> عنوان الموظف</label>
                    <p class="d-inline-block">{{$employee->address}}</p>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"> البريد الالكتروني </label>
                    <p class="d-inline-block">{{$employee->email}}</p>
                </div>

                <div class="btn-group d-flex gap-4">
                    <button class="btn btn-primary my-bg-grad w-50" type="submit"> تعديل </button>
                    <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('employees.index')}}">تراجع</a>
              </div>

            </div>
          </div>

        </form>
    </div>
</div>

@endsection

