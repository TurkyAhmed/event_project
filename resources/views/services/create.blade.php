
@extends('layouts.main_layout')

@section('content')
<div class="container pt-5">

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

        <div class="mb-3">
            <div class="form-check d-flex ">
                <label class="form-check-label" for="is_main_service"> خدمة اساسية </label>
                <input class="form-check-input" type="radio" value="1" name="is_main_service"  id="is_main_service" checked>
              </div>
              <div class="form-check d-flex">
                <label class="form-check-label"  for="is_main_service">  خدمة ثانوية </label>
                <input class="form-check-input" type="radio" value="0" name="is_main_service"  id="is_main_service" >
              </div>
          </div>

          <div class="mb-3">
            <div class="form-check d-flex ">
                <label class="form-check-label" for="is_avaliable"> نشط </label>
                <input class="form-check-input" type="radio" value="1" name="is_avaliable"  id="is_avaliable" checked>
              </div>
              <div class="form-check d-flex">
                <label class="form-check-label"  for="is_avaliable"> غير نشط </label>
                <input class="form-check-input" type="radio" value="0" name="is_avaliable"  id="is_avaliable" >
              </div>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label"> وصف الخدمة</label>
            <input type="text" name="description" class="form-control" value="{{old('description')}}" id="description" placeholder="  وصف الخدمة ">
            @error('description')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" > إضافة خدمة</button>
      </form>
</div>

@endsection

