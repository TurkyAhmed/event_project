{{-- @extends('layouts.main_layout')
@section('content')
    <div class="container mt-5">
        <div class="row mt-5">
            <h4>{{$hall->name}}</h4>

            <p> من تاريخ  : {{$cartItem['date_from']}}</p>
            <p> الى تاريخ : {{$cartItem['date_to']}}</p>
            @foreach ($cartItem['services_ids'] as $index => $serviceId)
                <p>الخدمة {{ $services[$index]->name }}</p>
                <p>السعر {{ $cartItem['price'][$index] }}</p>
                <p>الكمية {{ $cartItem['quantity'][$index] }}</p>
                <p>الاجمالي {{ $cartItem['price'][$index] * $cartItem['quantity'][$index] }}</p>
            @endforeach

            <div>
                <a href="{{route('cart.edit',$hall->id)}}">تعديل</a>
                <a href="{{route('cart.index')}}">العودة للقائمة</a>
            </div>
        </div>
    </div>
@endsection --}}



@extends('layouts.main_layout')
@section('content')

    {{-- <div class="container  mb-5">
    <div class="dashboard-top h_7rem">
        <h3 class=" pt-5 pe-5 text-white">  الحجز  </h3>
    </div> --}}

    <div class="form-fram mt-7rem ">
        <div class="sub-header-page mb-3">
            <h3 class="text-center"> تفاصيل الحجز </h3>
        </div>

        <p class="fs-5">  القاعة : {{$hall->name}}</p>
        <p class="fs-5"> العنوان : {{$cartItem['title']}}</p>
        <p class="fs-5"> الفترة : {{$cartItem['interval']}}</p>
        <p class="fs-5"> نوع الحدث : {{$cartItem['type_of_event']}}</p>
        <p class="fs-5"> التاريخ : من {{$cartItem['date_from']}} الى  {{$cartItem['date_to']}}</p>
        <p class="fs-5"> الملاحظات : {{$cartItem['note'] ? $cartItem['note'] : "لا توجد ملاحظات"}}</p>

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
            @foreach ($cartItem['services_ids'] as $index => $serviceId)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{ $services[$index]->name }}</td>
                    <td>{{ $cartItem['price'][$index] }}$</td>
                    <td>{{ $cartItem['quantity'][$index] }}</td>
                    <td><strong>{{ $cartItem['price'][$index] * $cartItem['quantity'][$index] }}$ </strong></td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach

            </tbody>
        </table>

        <p class="fs-5 mt-4 mb-5"> اجمالي الحجز : <strong>{{$cartItem['totalPrice']}}$</strong> </p>

        <div class="btn-group d-flex gap-4 mt-5">
            <a class="btn btn-primary my-bg-grad w-50" href="{{route('cart.edit',$hall->id)}}">تعديل</a>
            <a class="btn btn-outline-primary my-bg-transparent bg-tr w-50" href="{{route('cart.index')}}">العودة للقائمة</a>
        </div>
    </div>

@endsection

