{{-- @extends('layouts.main_layout')

@section('content') --}}

@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


    <div class="container my-bg-img ">
        <div class="dashboard-top nb-5 h_7rem">
            <h3 class=" pt-5 pe-5 text-white"> قائمة الموظفين  </h3>
        </div>

        <a class="btn btn-outline-primary my-bg-grad mb-3 mt-5" href="{{route('employees.create')}}"> إضافة موظف  </a>        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> اسم الموظف  </th>
                <th scope="col"> عنوان الموظف  </th>
                <th scope="col">  البريد الالكتروني  </th>
                <th scope="col"> الإجراءات </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)

                  <tr>
                    <th scope="row">1</th>
                    <td>{{$employee->name}} </td>
                    <td>{{$employee->address}} </td>
                    <td>{{$employee->email}}</td>
                    <td>
                        <a href="{{route('employees.show',$employee->id)}}"> <i class="fa-solid fa-circle-info"></i> </a>
                        <a href="{{route('employees.edit',$employee->id)}}"> <i class="fa-solid fa-pen-to-square"></i> | </a>
                        <a href="{{route('employees.delete',$employee->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>
    </div>

@endsection



