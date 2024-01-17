{{-- @extends('layouts.main_layout')
@section('content') --}}

@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


     <div class="container px-0 my-bg-img">
        <div class="dashboard-top nb-5 h_7rem">
            <h3 class=" pt-5 pe-5 text-white">  الموظفين  </h3>
        </div>

        <div class="form-fram mt-5">
        <div class="sub-header-page mb-3">
            <h3 class="text-center"> حذف الموظف </h3>
            <p class="fs-6">  هل تريد فعلاً حذف هذة الموظف </p>
        </div>

        <form action="{{route('employees.destroy',$user_with_employee->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <div class="card">
            <div class="card-header">
              تفاصيل الموظف
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label"> اسم الموظف ::</label>
                    <p class="d-inline-block">{{$user_with_employee->name}}</p>
                  </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">  رقم جوال الموظف :</label>
                    <p class="d-inline-block">{{$user_with_employee->phone}}</p>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label"> عنوان الموظف:</label>
                    <p class="d-inline-block">{{$user_with_employee->employee->address}}</p>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"> البريد الالكتروني :</label>
                    <p class="d-inline-block">{{$user_with_employee->email}}</p>
                </div>

                <div class="btn-group d-flex gap-4">
                    <button class="btn btn-danger w-50" type="submit"> تأكيد الحذف </button>
                    <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('employees.index')}}">تراجع</a>
              </div>

            </div>
        </div>
        </form>
    </div>
</div>
@endsection
