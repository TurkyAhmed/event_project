
@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')

<div class="container my-bg-img mb-5">
    <div class="dashboard-top h_7rem">
        <h3 class=" pt-5 pe-5 text-white">  الحجز  </h3>
    </div>

    <div class="form-fram mt-5">
        <div class="sub-header-page mb-3">
            <h3 class="text-center"> تفاصيل الحجز </h3>
        </div>

        <p class="fs-5"> الجهة الحاجزة : {{$reservationDetails[0]->username}}</p>
        <p class="fs-5">  القاعة : {{$reservationDetails[0]->hall_name}}</p>
        <p class="fs-5"> العنوان : {{$reservationDetails[0]->title}}</p>
        <p class="fs-5"> الفترة : {{$reservationDetails[0]->interval}}</p>
        <p class="fs-5"> الحالة : {{$reservationDetails[0]->status}}</p>
        <p class="fs-5"> نوع الحدث : {{$reservationDetails[0]->type_of_event}}</p>
        <p class="fs-5"> التاريخ : من {{date('Y-m-d',strtotime($reservationDetails[0]->date_from))}} الى  {{date('Y-m-d',strtotime($reservationDetails[0]->date_to))}}</p>
        <p class="fs-5"> الملاحظات : {{$reservationDetails[0]->note ? $reservationDetails[0]->note : "لا توجد ملاحظات"}}</p>

        <p class="fs-5"> الخدمات : </p>
        {{-- @foreach ($reservationDetails as $item)
            <p class="fs-5 me-3"> {{$item->service_name}}  ({{$item->service_count}} وجبة)</p>
        @endforeach --}}

        @if (isset($reservationDetails))
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم الخدمة</th>
            <th scope="col">السعر</th>
            <th scope="col">الكمية</th>
            <th scope="col">الاجمالي</th>
          </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($reservationDetails as $item)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{ $item->service_name }}</td>
                <td>{{ $item->service_price}}$</td>
                <td>{{ $item->service_count}} وجبة</td>
                <td><strong>{{ $item->service_price *  $item->service_count }}$ </strong></td>
            </tr>
            @php
                $i++;
            @endphp
        @endforeach


        </tbody>
        </table>
    @else
        <p>لا توجد خدمات مضافة</p>

    @endif

        <div class="btn-group d-flex gap-4 mt-5">
            <a class="btn btn-primary my-bg-grad w-50" href="{{route('reservations.edit',$reservationDetails[0]->reservation_id)}}"> تعديل </a>
            <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('reservations.index')}}">تراجع</a>
        </div>
</div>


@endsection
