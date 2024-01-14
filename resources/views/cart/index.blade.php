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
    </div>

@endsection
