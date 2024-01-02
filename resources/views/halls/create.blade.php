
@extends('layouts.main_layout')

@section('content')
<div class="container pt-5">

    <form action="{{route('halls.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> اسم القاعة </label>
            <input type="text" name="name" class="form-control my-input-text" value="{{old('name')}}" id="name" placeholder="اسم القاعة">
            @error('name')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="capacity" class="form-label"> سعة القاعة </label>
            <input type="text" name="capacity" class="form-control my-input-text" value="{{old('capacity')}}" id="capacity" placeholder="سعة القاعة">
            @error('capacity')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <div class="mb-3">
            <label for="feature" class="form-label"> مميزات القاعة</label>
            <input type="text" name="feature" class="form-control my-input-text" value="{{old('feature')}}" id="feature" placeholder=" مميزات القاعة ">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label"> سعر القاعة</label>
            <input type="text" name="price" class="form-control my-input-text" value="{{old('price')}}" id="price" placeholder=" سعر القاعة ">
            @error('price')
                <div class="text-danger fs-6">{{ $message }}</div>
            @enderror
        </div>

          <div class="mb-3">
            <label for="discount" class="form-label"> خصم القاعة</label>
            <input type="text" name="discount" class="form-control my-input-text" value="{{old('discount')}}" id="discount" placeholder=" خصم القاعة ">
          </div>

          <div class="mb-3 d-flex">
            <div class="form-check  ">
                <input class="form-check-input" type="radio" value="1" name="is_avaliable"  id="is_avaliable_active" checked>
                <label class="form-check-label" for="is_avaliable_active"> نشط </label>
              </div>
              <div class="form-check ">
                  <input class="form-check-input" type="radio" value="0" name="is_avaliable"  id="is_avaliable_disable" >
                <label class="form-check-label"  for="is_avaliable_disable"> غير نشط </label>
              </div>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label"> وصف القاعة</label>
            <input type="text" name="description" class="form-control my-input-text" value="{{old('description')}}" id="description" placeholder=" وصف القاعة ">
          </div>

          <button class="btn btn-outline-primary my-bg-grad" type="submit" > إضافة قاعة</button>
      </form>
</div>

@endsection

