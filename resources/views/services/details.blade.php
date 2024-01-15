
@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


<div class="container py-5 pe-5 my-bg-img">

    <div class="form-fram">
        <div class="sub-header-page mb-3">
            <h3 class="text-center"> الخدمات </h3>
        </div>

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
                    <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('services.index')}}">تراجع</a>
              </div>

            </div>
            </div>
        </form>
    </div>
</div>

@endsection

