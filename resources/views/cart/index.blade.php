@extends('layouts.main_layout')
@section('content')
@push('style')
<style>
    .navbar{
        background-image: linear-gradient(60deg, rgba(126,160,183,1) 0%, rgba(9, 87, 121, 0.704) 38%, rgba(89, 130, 142, 0.808) 100%);
    }
</style>
@endpush

@php
    $total =0;
@endphp



    <div class="container mt-5">
        <div class="h_70vh mt-5 pt-5  align-items-start gap-3">

            @if(session('successMsg'))
                <div class="alert alert-success">
                    {{ session('successMsg') }}
                </div>
            @endif

            @if(count($halls)>0)
            <p class="btn bg_primary py-2 px-4"><a class="text-decoration-none text-white fs-6" href="{{route('reservations.create')}}">إضافة حجز جديد</a></p>
            <h4>قائمة الحجوزات في السلة:</h4>
            <div class="row justify-content-center mt-5">
                @foreach ($halls as $hall)
                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="card_shadow pt-4">
                            <h3>{{$hall->name}}</h3>
                            <div class="d-flex justify-content-between">
                                <p>{{$cart[$hall->id]['title']}}</p>
                                <p>تكلفتها <strong>{{$cart[$hall->id]['totalPrice']}}$</strong> </p>

                                @php
                                    $total += $cart[$hall->id]['totalPrice']
                                @endphp
                            </div>

                            <div class="btn-group d-flex gap-4 ">
                                <p class="btn bg_primary  w-50 rounded-3"><a class="text-decoration-none text-white" href="{{route('cart.show',$hall->id)}}" >تفاصيل</a></p>
                                <p class="btn btn-outline-primary my-bg-transparent bg-tr w-50 rounded-3"><a class="text-decoration-none" href="{{route('cart.cancelSpecificreservation',$hall->id)}}"  > الغاء </a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <h5 class="mt-5 pe-3">اجمالي الحجز <strong>{{$total}}$</strong></h5>
            <div class="mt-4">
                <p class="btn bg_primary py-2 px-4"><a class="text-decoration-none text-white fs-6" href="{{route('reservations.store_reservation')}}">تأكيد الحجز</a></p>
                <p class="btn btn-secondary py-2 px-4"><a class="text-decoration-none text-white fs-6" href="{{route('cart.cancelAllReservation')}}">الغاء الحجز</a></p>
            </div>
        @else
            <div class="d-flex justify-content-center align-items-center" style="height: 60vh">
                <h2 class="text-black-50 text-center"> لا توجد حجوزات في السلة</h2>
            </div>
        @endif
        </div>
    </div>

@endsection
