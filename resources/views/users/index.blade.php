@extends('layouts.main_layout')

@section('content')
    <div class="container pt-5">
        <h2 class="pb-4"> قائمة المستخدمين </h2>
        <a class="btn btn-outline-primary my-bg-grad mb-3" href="{{route('users.create')}}"> إضافة مستخدم  </a>
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
                        <a href="{{route('users.show',$user->id)}}"> <i class="fa-solid fa-circle-info"></i>  |</a>
                        <a href="{{route('users.edit',$user->id)}}"> <i class="fa-solid fa-pen-to-square"></i> | </a>
                        <a href="{{route('users.delete',$user->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>
    </div>

@endsection



