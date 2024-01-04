
@extends('dashboard.dashboard')
@section('dashboard-content')

<div class="container pt-5 pe-5">

    {{-- <form action="{{route('services.edit',$service->id)}}" method="">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> اسم الخدمة </label>
            <input type="text" name="name" class="form-control" value="{{$service->name}}" id="name" placeholder="اسم الخدمة" readonly>
            @error('name')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="price" class="form-label"> سعر الخدمة</label>
            <input type="text" name="price" class="form-control" value="{{$service->price}}" id="price" placeholder=" سعر الخدمة ">
            @error('price')
                <div class="text-danger" >{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_main_service" value="{{$service->is_main_service}}" id="service_status_on" {{ $service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="service_status_on">خدمة اساسية</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_main_service" value="{{$service->is_main_service}}" id="service_status_off" {{ !$service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="service_status_off"> خدمة ثانوية</label>
            </div>
          </div>

          <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_avaliable" value="{{$service->is_main_service}}" id="status_on" {{ $service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_on">نشط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_avaliable" value="{{$service->is_main_service}}" id="status_off" {{ !$service->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_off">غير نشط</label>
            </div>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label"> وصف الخدمة</label>
            <input type="text" name="description" class="form-control" value="{{$service->description}}" id="description" placeholder=" وصف الخدمة ">
          </div>

          <a href="{{route('services.index')}}">تراجع</a>
          <input type="submit" value="تعديل">
      </form> --}}

      <form action="{{route('services.edit',$service->id)}}" method="">
        @csrf

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
                    <button class="btn btn-primary my-bg-grad w-50" type="submit"> تعديل </button>
                    <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('halls.index')}}">تراجع</a>
              </div>

            </div>
        </div>
    </form>
</div>

@endsection

