
{{-- @extends('layouts.main_layout')
@section('content') --}}

@extends('dashboard.dashboard')
@section('dashboard-content')

<div class="container pt-5 pe-5">

    <form action="{{route('services.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> اسم الخدمة </label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="اسم الخدمه">
            @error('name')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

        <div class="mb-3">
            <label for="price" class="form-label"> سعر الخدمة</label>
            <input type="text" name="price" class="form-control" value="{{old('price')}}" id="price" placeholder=" سعر سعر الخدمة ">
            @error('price')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 d-flex">
            <p class="ms-5"> نوع الخدمة:  </p>
            <div class="form-check  ">
                <input class="form-check-input" type="radio" value="1" name="is_main_service"  id="main_service" checked>
                <label class="form-check-label" for="main_service"> خدمة اساسية </label>
              </div>
              <div class="form-check ">
                  <input class="form-check-input" type="radio" value="0" name="is_main_service"  id="secondary-service" >
                <label class="form-check-label"  for="secondary-service">  خدمة ثانوية </label>
              </div>
          </div>

          <div class="mb-3 d-flex">
            <p class="ms-5"> حالة الخدمة:  </p>
            <div class="form-check  ">
                <input class="form-check-input" type="radio" value="1" name="is_avaliable"  id="is_avaliable_active" checked>
                <label class="form-check-label" for="is_avaliable_active"> نشط </label>
              </div>
              <div class="form-check ">
                  <input class="form-check-input" type="radio" value="0" name="is_avaliable"  id="is_avaliable_unactive" >
                <label class="form-check-label"  for="is_avaliable_unactive"> غير نشط </label>
              </div>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label"> وصف الخدمة</label>
            <input type="text" name="description" class="form-control" value="{{old('description')}}" id="description" placeholder="  وصف الخدمة ">
            @error('description')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="btn-group d-flex gap-4">
            <button class="btn btn-primary my-bg-grad w-50" type="submit"> إضافة  </button>
            <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('halls.index')}}">تراجع</a>
        </div>
    </form>
</div>

@endsection

