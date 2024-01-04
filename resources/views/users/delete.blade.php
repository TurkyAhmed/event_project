@extends('dashboard.dashboard')
@section('dashboard-content')

<div class="container pt-5 pe-5">
    <form action="{{route('users.destroy',$user->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <h4> حذف المستخدم </h4>
        <h6 class="mb-4"> هل تريد فعلاً حذف هذا المستخدم  </h6>

        <div class="mb-3">
            <label for="name" class="form-label"> اسم المستخدم </label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" id="name" placeholder="اسم المستخدم">
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label"> رقم المستخدم</label>
            <input type="text" name="phone" class="form-control" value="{{$user->phone}}" id="phone" placeholder=" رقم المستخدم ">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label"> البريد الالكتروني </label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}" id="email" placeholder=" البريد الالكتروني  ">
        </div>


        <div class="btn-group d-flex gap-4">
            <button class="btn btn-danger w-50" type="submit"> تأكيد الحذف  </button>
            <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('users.index')}}">تراجع</a>
        </div>

    </form>
</div>
@endsection
