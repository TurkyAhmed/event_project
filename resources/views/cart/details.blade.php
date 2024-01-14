@extends('layouts.main_layout')
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
@endsection
