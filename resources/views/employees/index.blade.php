@extends('layouts.main_layout')

@section('content')
    <div class="container pt-5">
        <a class="btn btn-primary" href="{{route('employees.create')}}"> إضافة موظف جديد </a>
        <table class="table table-striped">
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
                        <a href="{{route('employees.show',$employee->id)}}"> تفاصيل </a>
                        <a href="{{route('employees.edit',$employee->id)}}"> تعديل </a>
                        <a href="{{route('employees.delete',$employee->id)}}"> حذف </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>
    </div>

@endsection



