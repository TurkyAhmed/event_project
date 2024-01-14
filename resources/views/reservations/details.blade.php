@extends('dashboard.dashboard')
@section('dashboard-content')

   <div class="container">
        {{-- <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> القاعة </label>
                <p>{{$reservation->title}}</p>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> القاعة </label>
                <p>{{$reservation_details[0]->service_count}}</p>
            </div>

        </div> --}}

        <p> الجهة الحاجزة</p>
        <p> عنوان الحجز </p>
        <p>الفترة</p>
        <p>حالة الحجز </p>
        <p>حالة الحجز </p>
   </div>

@endsection
