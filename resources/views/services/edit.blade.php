
@extends('layouts.main_layout')

@section('content')
<div class="container pt-5">

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

          <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_main_service" value="1" id="status_on" {{ $service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_on">خدمة اساسية</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_main_service" value="0" id="status_off" {{ !$service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_off"> خدمة ثانوية</label>
            </div>
        </div>

          <div class="mb-3">
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

          <a href="{{route('services.index')}}">تراجع</a>
          <input type="submit" value="حفظ">
      </form>
</div>

@endsection

