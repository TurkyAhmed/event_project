@extends('dashboard.dashboard')
@section('dashboard-content')

<div class="container py-5 pe-5 my-bg-img">

    <div class="form-fram">
        <div class="sub-header-page mb-3">
            <h3 class="text-center">  الخدمات </h3>
            <p class="fs-6"> تعديل الخدمة </p>
        </div>

        <form action="{{route('services.update',$service->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label"> اسم الخدمة </label>
            <input type="text" name="name" class="form-control" value="{{$service->name}}" id="name" placeholder="اسم الخدمة">
            @error('name')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="price" class="form-label"> سعر الخدمة</label>
            <input type="text" name="price" class="form-control" value="{{$service->price}}" id="price" placeholder=" سعر الخدمة ">
            @error('price')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3 d-flex">
            <p class="ms-3"> نوع الخدمة : </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_main_service" value="1" id="status_on" {{ $service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_on">خدمة اساسية</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_main_service" value="0" id="status_off" {{ !$service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_off"> خدمة ثانوية</label>
            </div>
        </div>

          <div class="mb-3 d-flex">
            <p class="ms-3"> حالة الخدمة : </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_avaliable" value="1" id="status_on" {{ $service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_on">نشط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_avaliable" value="0" id="status_off" {{ !$service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_off">غير نشط</label>
            </div>
        </div>

          <div class="mb-3">
            <label for="description" class="form-label"> وصف الخدمة</label>
            <input type="text" name="description" class="form-control" value="{{$service->description}}" id="description" placeholder=" وصف الخدمة ">
          </div>

          <div class="btn-group d-flex gap-4">
            <button class="btn btn-primary my-bg-grad w-50" type="submit"> حفظ </button>
            <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('services.index')}}">تراجع</a>
        </div>

        </form>
    </div>
</div>

@endsection

