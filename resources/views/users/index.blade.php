@extends('layouts.main_layout')

@section('content')
    <div class="container pt-5">
        <a class="btn btn-primary" href="{{route('users.create')}}"> إضافة مستخدم جديد </a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> اسم المستخدم  </th>
                <th scope="col">  البريد الالكتروني  </th>
                <th scope="col"> الإجراءات </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                  <tr>
                    <th scope="row">1</th>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('users.show',$user->id)}}"> تفاصيل </a>
                        <a href="{{route('users.edit',$user->id)}}"> تعديل </a>
                        <a href="{{route('users.delete',$user->id)}}"> حذف </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>
    </div>

@endsection



