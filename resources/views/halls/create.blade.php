
{{-- @extends('layouts.main_layout')

@section('content') --}}

@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')

    <div class="container px-0 my-bg-img">
        <div class="dashboard-top  h_7rem">
            <h3 class=" pt-5 pe-5 text-white">  القاعات  </h3>
        </div>

    <div class="form-fram mt-5">
        <div class="sub-header-page mb-3">
            <h3 class="text-center"> القاعات </h3>
            <p class="fs-6"> إضافة قاعة جديدة </p>
        </div>

        <form action="{{route('halls.store')}}" enctype="multipart/form-data" method="post">
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
                <label for="feature" class="form-label mb-0"> مميزات القاعة :</label>
                <p class="mt-0"><sub class="text-secondary">يرجى فصل كل ميزة عن الاخرى بالعلامه </sub></p>
                {{-- <textarea name="feature" id="feature" cols="30" rows="5" class="form-control my-input-text" value="{{old('feature')}}" placeholder=" مميزات القاعة "></textarea> --}}
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
                <p class="ms-5"> حالة القاعة:  </p>
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

              <div class="mb-3">
                <label for="hall_photo" class="form-label"> صورة القاعة </label>
                <input type="file"  name="myPhoto" class="form-control"  id="hall_photo" >
              </div>

              <div class="btn-group d-flex gap-4">
                <button class="btn btn-primary my-bg-grad w-50" type="submit"> إضافة  </button>
                <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('halls.index')}}">تراجع</a>
            </div>
        </form>
    </div>

</div>

@endsection

