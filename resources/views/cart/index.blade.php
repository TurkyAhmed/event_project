@extends('layouts.main_layout')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($halls as $hall)
                <div class="col-12 col-md-6 col-lg-4 mt-3">
                    <div class="card_shadow">
                        <h3>{{$hall->name}}</h3>
                        <div class="d-flex">
                            <p class="w-50"><a href="{{route('cart.show',$hall->id)}}" class="" >تفاصيل</a></p>
                            <p class="w-50"><a href="{{route('cart.cancelSpecificreservation',$hall->id)}}" class="" > الغاء </a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="h_100vh mt-5 pt-5 d-flex align-items-start gap-3">
            <p class="btn btn-primary "><a class="text-decoration-none text-white" href="{{route('reservations.store_reservation')}}">تأكيد الحجز</a></p>
            <p class="btn btn-secondary"><a class="text-decoration-none text-white" href="{{route('cart.cancelAllReservation')}}">الغاء الحجز</a></p>
        </div>

    </div>

@endsection
