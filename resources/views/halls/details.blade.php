
@extends('layouts.main_layout')

@section('content')
<div class="container pt-5">

    <form action="{{route('halls.edit',$hall->id)}}" method="">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> اسم القاعة </label>
            <input type="text" name="name" class="form-control" value="{{$hall->name}}" id="name" placeholder="اسم القاعة" readonly>
            {{-- @error('name')
             <div class="alert alert-danger" style="color:red">{{ $message }}</div>
            @enderror --}}
          </div>

          <div class="mb-3">
            <label for="capacity" class="form-label"> سعة القاعة </label>
            <input type="text" name="capacity" class="form-control" value="{{$hall->capacity}}" id="capacity" placeholder="سعة القاعة">
          </div>

          <div class="mb-3">
            <label for="feature" class="form-label"> مميزات القاعة</label>
            <input type="text" name="feature" class="form-control" value="{{$hall->feature}}" id="feature" placeholder=" مميزات القاعة ">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label"> سعر القاعة</label>
            <input type="text" name="price" class="form-control" value="{{$hall->price}}" id="price" placeholder=" سعر القاعة ">
          </div>

          <div class="mb-3">
            <label for="discount" class="form-label"> خصم القاعة</label>
            <input type="text" name="discount" class="form-control" value="{{$hall->discount}}" id="discount" placeholder=" خصم القاعة ">
          </div>

          <div class="mb-3">
            <div class="form-check">
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

          <a href="{{route('halls.index')}}">تراجع</a>
          <input type="submit" value="تعديل">
      </form>
</div>

@endsection

