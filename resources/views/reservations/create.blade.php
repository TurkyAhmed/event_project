@extends('layouts.main_layout')
@section('content')
    <div class="reservation">
        <div class="container " style="margin-top: 12rem;">
            <div class="halls">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg" data-setbg="hr-1.jpg">
                                        <div class="reservation__hall__title">
                                            <h4>قاعة السعادة</h4>
                                            <h2><sup>$</sup>55<span>/للحجز الواحد</span></h2>
                                        </div>
                                        <a href="{{route('reservations.reservation_details',1)}}"> احجز الان </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg" data-setbg="family.jpg">
                                        <div class="reservation__hall__title">
                                            <h4>قاعة الاستدامة</h4>
                                            <h2><sup>$</sup>120<span>/للحجز الواحد</span></>
                                        </div>
                                         <a href="{{route('reservations.reservation_details',2)}}" > احجز الان </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg" data-setbg="dexelary2.jpg">
                                        <div class="reservation__hall__title">
                                            <h4>القاعة الكبرى</h4>
                                            <h2>180<sup class="text-end">$</sup><span>/للحجز الواحد</span></h2>
                                        </div>
                                        <a href="{{route('reservations.reservation_details',3)}}"> احجز الان </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg" data-setbg="suite.png">
                                        <div class="reservation__hall__title">
                                            <h4>قاعة الاجتماعات</h4>
                                            <h2><sup>$</sup>230<span>/day</span></>
                                        </div>
                                         <a href="{{route('reservations.reservation_details',4)}}">Booking Now</a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg" data-setbg="hr-1.jpg">
                                        <div class="reservation__hall__title">
                                            <h4>قاعة السعادة</h4>
                                            <h2><sup>$</sup>55<span>/للحجز الواحد</span></h2>
                                        </div>
                                        <a href="{{route('reservations.reservation_details',5)}}"> احجز الان </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg" data-setbg="family.jpg">
                                        <div class="reservation__hall__title">
                                            <h4>قاعة الاستدامة</h4>
                                            <h2><sup>$</sup>120<span>/للحجز الواحد</span></>
                                        </div>
                                         <a href="{{route('reservations.reservation_details',6)}}" > احجز الان </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg" data-setbg="dexelary2.jpg">
                                        <div class="reservation__hall__title">
                                            <h4>القاعة الكبرى</h4>
                                            <h2>180<sup class="text-end">$</sup><span>/للحجز الواحد</span></h2>
                                        </div>
                                        <a href="{{route('reservations.reservation_details',7)}}"> احجز الان </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg" data-setbg="suite.png">
                                        <div class="reservation__hall__title">
                                            <h4>قاعة الاجتماعات</h4>
                                            <h2><sup>$</sup>230<span>/day</span></>
                                        </div>
                                         <a href="{{route('reservations.reservation_details',4)}}">Booking Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
@endsection
