@extends('layouts.main_layout')
@section('content')
        <section class="landindpage_halls_hero h_100vh">
            <div id="carousellandindpage_halls_hero" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img src="{{asset('assets/imgs/istdama1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/imgs/sada1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/imgs/con1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/imgs/salam1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/imgs/aon1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="0" class="active thumbail" aria-current="true" aria-label="Slide 1">
                      <img src="{{asset('assets/imgs/istdama1.jpg')}}" class="d-block w-100" alt="...">
                    </button>
                    <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="1" class="thumbail" aria-label="Slide 2">
                      <img src="{{asset('assets/imgs/sada1.jpg')}}" class="d-block w-100" alt="...">
                    </button>
                    <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="2" class="thumbail" aria-label="Slide 3">
                      <img src="{{asset('assets/imgs/con1.jpg')}}" class="d-block w-100" alt="...">
                    </button>
                    <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="3" class="thumbail" aria-label="Slide 4">
                        <img src="{{asset('assets/imgs/salam1.jpg')}}" class="d-block w-100" alt="...">
                    </button>
                    <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="4" class="thumbail" aria-label="Slide 5">
                        <img src="{{asset('assets/imgs/aon1.jpg')}}" class="d-block w-100" alt="...">
                    </button>
                </div>
            </div>
        </section>

        <section class="halls_deatails">
            <div class="container">
                @for ( $i=0 ; $i < count($halls) ; $i+=2)
                    <div class="row px-3 pt-5">
                        <div class="col-12 col-md-6 px-3 position-relative">
                            @for ($j=0; $j<2; $j+=2)
                                <img class="img-fluid" src='{{asset("assets/imgs/".$imgs[$halls[$i]->id][$j])}}' target="r_hall1" alt="">
                                <img class="img-fluid" src='{{asset("assets/imgs/".$imgs[$halls[$i]->id][$j+1])}}' target="r_hall2" alt="">
                            @endfor
                        </div>
                        <div class="col-12 col-md-6 mt-5 pt-5">
                            <h1 class="text_primary">{{$halls[$i]->name }}</h1>

                            <h4 class="mt-5">سعر القاعة :</h4>
                            <p class="pe-4 fs-5"><i class="fa-solid fa-dollar-sign text_primary fs-4"></i> سعر القاعة للحجز الواحد <strong class="fs-5">{{$halls[$i]->price}}<span target="dolar">$</span> </strong> </p>

                            @if($halls[$i]->discount != 0)
                                <h4 class="mt-3">خصم القاعة :</h4>
                                <p class="pe-4 fs-5"> الخصم <strong>{{$halls[$i]->discount}} <span target="dolar">$</span></strong> </p>
                                <p class="pe-4 fs-5"> السعر السابق <del>{{$halls[$i]->price}}</del><span target="dolar">$</span> السعر الحالي <ins>{{$halls[$i]->price - $halls[$i]->discount}}</ins><span target="dolar">$</span> </p>
                            @endif


                            <h4 class="mt-4">سعة القاعة :</h4>
                            <p class="pe-4 fs-5"><i class="fa-solid fa-person ms-2 text_primary fs-3"></i>تتسع القاعة لـ {{$halls[$i]->capacity}} شخص </p>

                            <a class="btn_halls_details" href="{{route('halls.landingpageHallDetails',$halls[$i]->id)}}"> تفاصيل اكثر </a>
                            {{-- @php
                                $features = explode('|',$halls[$i]->feature);
                            @endphp --}}

                            {{-- <h5>مميزات القاعة :</h5>
                                    @foreach ($features as $feature)
                                            @if(str_contains($feature,'مساحة'))
                                                <p class="pe-4"><i class="fa-solid fa-ruler-combined "></i> {{$feature}}</p>
                                            @elseif (str_contains($feature,'عقد'))
                                                <p  class="pe-4">{{$feature}}</p>
                                            @elseif (str_contains($feature,'مكيفة'))
                                                <p class="pe-4"><i class="fa-regular fa-snowflake"></i> {{$feature}} </p>
                                            @elseif (str_contains($feature,'إنترنت'))
                                                <p class="pe-4"><i class="fa-solid fa-wifi"></i> {{$feature}} </p>
                                            @elseif (str_contains($feature,'شاشة '))
                                                <p class="pe-4"><i class="fa-solid fa-tv"></i> {{$feature}} </p>
                                            @elseif (str_contains($feature,'ستاند'))
                                                <p class="pe-4"><img src="{{asset('assets/imgs/stand.svg')}}" alt="icon">{{$feature}} </p>
                                            @elseif (str_contains($feature,'الياف'))
                                                <p class="pe-4"><img src="{{asset('assets/imgs/broadcastlivemessagenewsreport.svg')}}" alt="icon">{{$feature}} </p>
                                            @endif
                                    @endforeach --}}

                            {{-- @php
                                $descriptions = explode('|',$halls[$i]->description);
                            @endphp
                            @if($descriptions[0] != null)
                                <h5 class="mt-3">وصف القاعة :</h5>
                                @foreach ($descriptions as $description)
                                    <p class="pe-4"> {{$description}} </p>
                                @endforeach
                            @endif --}}

                        </div>
                    </div>
                        @if(isset($halls[$i+1]))
                    <div class="row px-3 pt-5">
                        <div class="col-12 col-md-6 px-3 order-2 position-relative">
                            @for ($j=0; $j<2; $j+=2)
                                @if (isset($imgs[$halls[$i+1]->id]))
                                    <img class="img-fluid" src='{{asset("assets/imgs/".$imgs[$halls[$i+1]->id][$j])}}'  target="l_hall1" alt="">
                                    <img class="img-fluid" src='{{asset("assets/imgs/".$imgs[$halls[$i+1]->id][$j+1])}}' target="l_hall2" alt="">
                                @endif
                            @endfor
                        </div>

                        <div class="col-12 col-md-6 mt-5 pt-5">
                            <h1 class="text_primary">{{$halls[$i+1]->name }}</h1>

                            <h4 class="mt-5">سعر القاعة :</h4>
                            <p class="pe-4 fs-5"><i class="fa-solid fa-dollar-sign text_primary fs-4"></i> سعر القاعة للحجز الواحد <strong class="fs-5">{{$halls[$i+1]->price}}<span target="dolar">$</span> </strong> </p>

                            @if($halls[$i+1]->discount != 0)
                                <h5 class="mt-4">خصم القاعة :</h5>
                                <p class="pe-4"> الخصم <strong>{{$halls[$i+1]->discount}} <span target="dolar">$</span></strong> </p>
                                <p class="pe-4"> السعر السابق <del>{{$halls[$i+1]->price}}</del><span target="dolar">$</span> السعر الحالي <ins>{{$halls[$i+1]->price - $halls[$i+1]->discount}}</ins><span target="dolar">$</span> </p>
                            @endif

                            <h4 class="mt-4">سعة القاعة :</h4>
                            <p class="pe-4 fs-5"><i class="fa-solid fa-person ms-2 text_primary fs-3"></i>تتسع القاعة لـ {{$halls[$i]->capacity}} شخص </p>

                            <a class="btn_halls_details" href="{{route('halls.landingpageHallDetails',$halls[$i+1]->id)}}"> تفاصيل اكثر </a>
                          {{-- @php
                                $features = explode('|',$halls[$i+1]->feature);
                            @endphp
                            <h5 class="mt-3">مميزات القاعة :</h5>
                            @foreach ($features as $feature)
                                @if(str_contains($feature,'مساحة'))
                                    <p class="pe-4 "><i class="fa-solid fa-ruler-combined "></i> {{$feature}}</p>
                                @elseif (str_contains($feature,'إمكانية'))
                                    <p  class="pe-4">{{$feature}}</p>
                                @elseif (str_contains($feature,'مكيفة'))
                                    <p class="pe-4"><i class="fa-regular fa-snowflake"></i> {{$feature}} </p>
                                @elseif (str_contains($feature,'إنترنت'))
                                    <p class="pe-4"><i class="fa-solid fa-wifi"></i> {{$feature}} </p>
                                @elseif (str_contains($feature,'شاشة '))
                                    <p class="pe-4"><i class="fa-solid fa-tv"></i> {{$feature}} </p>
                                @elseif (str_contains($feature,'ستاند'))
                                    <p class="pe-4"><img src="{{asset('assets/imgs/stand.svg')}}" alt="icon">{{$feature}} </p>
                                @elseif (str_contains($feature,'الياف'))
                                    <p class="pe-4"><img src="{{asset('assets/imgs/broadcastlivemessagenewsreport.svg')}}" alt="icon">{{$feature}} </p>

                                @endif
                            @endforeach --}}

                            {{-- <h4 class="mt-3">سعر القاعة :</h4>
                            <p class="pe-4 fs-5"> سعر القاعة للحجز الواحد <strong class="fs-5">{{$halls[$i]->price}}<span target="dolar">$</span> </strong> </p>

                            @if($halls[$i]->discount != 0)
                                <h5 class="mt-3">خصم القاعة :</h5>
                                <p class="pe-4"> الخصم <strong>{{$halls[$i]->discount}} <span target="dolar">$</span></strong> </p>
                                <p class="pe-4"> السعر السابق <del>{{$halls[$i]->price}}</del><span target="dolar">$</span> السعر الحالي <ins>{{$halls[$i]->price - $halls[$i]->discount}}</ins><span target="dolar">$</span> </p>
                            @endif --}}

                            {{-- @php
                                $descriptions = explode('|',$halls[$i+1]->description);
                            @endphp

                            @if($descriptions[0] != null)
                                <h5 class="mt-3">وصف القاعة :</h5>
                                @foreach ($descriptions as $description)
                                    <p class="pe-4"> {{$description}} </p>
                                @endforeach
                            @endif --}}
                        </div>


                        @endif
                    </div>
                @endfor
            </div>

        </section>




@endsection
