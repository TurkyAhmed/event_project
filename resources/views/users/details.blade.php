@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


    <div class=" container pt-5 pe-5">

    <form action="{{route('users.edit',$user->id)}}" method="get">
        @csrf

        <div class="card">
            <div class="card-header">
              تفاصيل المستخدم
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label"> اسم المستخدم :</label>
                    <p class="d-inline-block">{{$user->name}}</p>
                  </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">  رقم جوال المستخدم </label>
                    <p class="d-inline-block">{{$user->phone}}</p>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"> البريد الالكتروني </label>
                    <p class="d-inline-block">{{$user->email}}</p>
                </div>

                <div class="btn-group d-flex gap-4">
                    <button class="btn btn-primary my-bg-grad w-50" type="submit"> تعديل </button>
                    <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('users.index')}}">تراجع</a>
              </div>

            </div>
        </div>
</div>

@endsection

