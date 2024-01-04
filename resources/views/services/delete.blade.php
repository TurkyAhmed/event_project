{{-- @extends('layouts.main_layout')
@section('content') --}}

@extends('dashboard.dashboard')
@section('dashboard-content')

<div class="container pt-5 pe-5">

    {{-- TODO /list details --}}

    <form action="{{route('services.destroy',$service->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <h4> حذف الخدمة </h4>
        <h6> هل تريد فعلاً حذف هذة القاعة </h6>

        <div class="card">
            <div class="card-header">
              تفاصيل الخدمة
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label"> اسم الخدمة </label>
                    <p class="d-inline-block">{{$service->name}}</p>
                  </div>

                <div class="mb-3">
                    <label for="price" class="form-label"> سعر الخدمة</label>
                    <p class="d-inline-block">{{$service->price}}</p>
                </div>

                <div class="mb-3">
                    <label for="feature" class="form-label"> نوع الخدمة : </label>
                    <p class="d-inline-block">{{$service->is_main_service? 'خدمة اساسية' : ' خدمة فرعية ' }}</p>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label"> حالة الخدمة :</label>
                    <p class="d-inline-block">{{$service->status ? 'نشط' : 'غير نشط' }}</p>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label"> وصف الخدمة :</label>
                    <p class="d-inline-block">{{$service->description}}</p>
                </div>

                <div class="btn-group d-flex gap-4">
                    <button class="btn btn-danger w-50" type="submit"> تأكيد الحذف </button>
                    <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('halls.index')}}">تراجع</a>
              </div>

            </div>
        </div>

    </form>
</div>
@endsection
