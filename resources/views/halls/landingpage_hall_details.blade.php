@extends('layouts.main_layout')
@section('content')
<div class="container pt-5 mt-5">
    <div class="row">
        <p> الاسم : {{$hall->name}}</p>
        <p> السعة : {{$hall->capacity}}</p>
        <p> المميزات : {{$hall->feature}}</p>
        @php

            $features = explode('|',$hall->feature);
            echo $features[0];
        @endphp
        <p> الميزة الاولى : {{$features[0]}}</p>
        <p> السعر : {{$hall->price}}</p>
        <p> الخصم : {{$hall->discount}}</p>
        <p> الوصف : {{$hall->description}}</p>

    </div>
</div>

@endsection
