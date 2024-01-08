{{-- @extends('layouts.main_layout')

@section('content') --}}

@extends('dashboard.dashboard')
@section('dashboard-content')

<div class="container py-5 pe-5 my-bg-img">

    <div class="form-fram">
        <div class="sub-header-page mb-3">
            <h3 class="text-center"> حذف القاعة </h3>
            <p class="fs-6">  هل تريد فعلاً حذف هذة القاعة؟ </p>
        </div>

        <form action="{{route('halls.destroy',$hall->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <div class="card">
            <div class="card-header">
              تفاصيل القاعة
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label"> اسم القاعة :</label>
                    <p class="d-inline-block">{{$hall->name}}</p>
                  </div>

                <div class="mb-3">
                    <label for="capacity" class="form-label"> سعة القاعة :</label>
                    <p class="d-inline-block">{{$hall->capacity}}</p>
                </div>

                <div class="mb-3">
                    <label for="feature" class="form-label"> مميزات القاعة :</label>
                    <p class="d-inline-block">{{$hall->feature}}</p>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label"> سعر القاعة</label>
                    <p class="d-inline-block">{{$hall->price}}</p>
                </div>

                <div class="mb-3">
                    <label for="discount" class="form-label"> خصم القاعة :</label>
                    <p class="d-inline-block">{{$hall->discount}}</p>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label"> حالة القاعة :</label>
                    <p class="d-inline-block">{{$hall->status ? 'نشط' : 'غير نشط' }}</p>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label"> وصف القاعة :</label>
                    <p class="d-inline-block">{{$hall->description}}</p>
                </div>

                <div class="mb-3">
                    <label for="discount" class="form-label"> خصم القاعة :</label>
                    <p class="d-inline-block">{{$hall->discount}}</p>
                </div>

                <div class="btn-group d-flex gap-4">
                    <button class="btn btn-danger w-50" type="submit"> تأكيد الحذف </button>
                    <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('halls.index')}}">تراجع</a>
                </div>

            </div>
        </div>
        </form>
    </div>
</div>
@endsection
