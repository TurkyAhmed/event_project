@extends('layouts.main_layout')
@section('content')
@push('style')
<style>
     .navbar{
        background-image: var( --_primary_grad);
    }
    .h_70vh{
        min-height: 73.35vh
    }
    .card_shadow{
            height: 15rem;
        }

    .container_of_type{
        position: absolute;
        left: 50%;
        top: 30%;
        transform: translate(-50%, -50%);
    }

    .container_of_type .card_shadow{
        width: 25rem
    }

    .card_shadow.bg_primary::after{
        background-color:#fff;
    }

    .bg_primary:hover {
        background-image:inherit;
    }

</style>
@endpush
    <div class="container h_70vh ">
        <div class="row mt-5 pt-5 justify-content-center container_of_type">
            <h3 class="text_primary mb-3"> اولوية الحجز عن طريق : </h3>
            <div class="col-12 col-md-6">
                <a href="{{route('reservations.create')}}" class="text-decoration-none text-white text-center fs-4">
                    <div class="card_shadow bg_primary">
                        عن طريق القاعة
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6">
                <a href="{{route('reservations.filterByDate')}}" class="text-decoration-none text_primary text-center fs-4">
                    <div class="card_shadow ">
                        عن طريق التاريخ
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
