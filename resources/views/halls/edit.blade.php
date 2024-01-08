
{{-- @extends('layouts.main_layout')

@section('content') --}}

@extends('dashboard.dashboard')
@section('dashboard-content')

<div class="container py-5 pe-5 my-bg-img">

    <div class="form-fram">
        <div class="sub-header-page mb-3">
            <h3 class="text-center">  القاعات </h3>
            <p class="fs-6"> تعديل القاعة </p>
        </div>

        <form action="{{route('halls.update',$hall->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label"> اسم القاعة </label>
            <input type="text" name="name" class="form-control" value="{{$hall->name}}" id="name" placeholder="اسم القاعة">
            @error('name')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="capacity" class="form-label"> سعة القاعة </label>
            <input type="text" name="capacity" class="form-control" value="{{$hall->capacity}}" id="capacity" placeholder="سعة القاعة">
            @error('capacity')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <div class="mb-3">
            <label for="feature" class="form-label"> مميزات القاعة</label>
            <input type="text" name="feature" class="form-control" value="{{$hall->feature}}" id="feature" placeholder=" مميزات القاعة ">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label"> سعر القاعة</label>
            <input type="text" name="price" class="form-control" value="{{$hall->price}}" id="price" placeholder=" سعر القاعة ">
            @error('price')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <div class="mb-3">
            <label for="discount" class="form-label"> خصم القاعة</label>
            <input type="text" name="discount" class="form-control" value="{{$hall->discount}}" id="discount" placeholder=" خصم القاعة ">
          </div>

          <div class="mb-3 d-flex">
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="is_avaliable" value="1" id="status_on" {{ $hall->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_on">نشط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_avaliable" value="0" id="status_off" {{ !$hall->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_off">غير نشط</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"> وصف القاعة</label>
            <input type="text" name="description" class="form-control" value="{{$hall->description}}" id="description" placeholder=" وصف القاعة ">
        </div>


        <div class="btn-group d-flex gap-4">
            <button class="btn btn-primary my-bg-grad w-50" type="submit"> حفظ </button>
            <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('halls.index')}}">تراجع</a>
        </div>

        </form>
    </div>
</div>

@endsection

