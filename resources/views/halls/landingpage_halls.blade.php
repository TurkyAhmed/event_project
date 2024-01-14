@extends('layouts.main_layout')
@section('content')
        <section class="landindpage_halls_hero h_100vh">
            <div id="carousellandindpage_halls_hero" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner h_100vh">
                  <div class="carousel-item active">
                    <img src="{{asset('assets/imgs/istdama.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/imgs/shabam.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/imgs/slam.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="halls_deatails">
            <div class="container">
                @for ( $i=0 ; $i < count($halls) ; $i+=2)
                    <div class="row px-3 pt-5">
                        <div class="col-12 col-md-6 px-3 position-relative">
                                <img class="img-fluid" src="{{asset('assets/imgs/istdama.jpg')}}" targer="r_hall1" alt="">
                                <img class="img-fluid" src="{{asset('assets/imgs/slam.jpg')}}" targer="r_hall2" alt="">
                        </div>
                        <div class="col-12 col-md-6 mt-5 pt-5">
                            <h1>{{$halls[$i]->name }}</h1>
                            <h5 class="mt-3">سعة القاعة :</h5>
                            <p class="pe-4"><i class="fa-solid fa-person ms-2"></i>تتسع القاعة لـ {{$halls[$i]->capacity}} شخص </p>

                            @php
                                $features = explode('|',$halls[$i]->feature);
                            @endphp

                            <h5>مميزات القاعة :</h5>
                            {{-- <div class="room-services"> --}}
                                {{-- <div class="row my-pt-3"> --}}
                                    @foreach ($features as $feature)
                                        {{-- <div class=" col-6 "> --}}
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
                                        {{-- </div> --}}
                                    @endforeach
                                {{-- </div> --}}
                            {{-- </div> --}}

                            <h5 class="mt-3">سعر القاعة :</h5>
                            <p class="pe-4"> سعر القاعة للحجز الواحد <strong class="fs-5">{{$halls[$i]->price}}<span target="dolar">$</span> </strong> </p>

                            @if($halls[$i]->discount != 0)
                                <h5 class="mt-3">خصم القاعة :</h5>
                                <p class="pe-4"> الخصم <strong>{{$halls[$i]->discount}} <span target="dolar">$</span></strong> </p>
                                <p class="pe-4"> السعر السابق <del>{{$halls[$i]->price}}</del><span target="dolar">$</span> السعر الحالي <ins>{{$halls[$i]->price - $halls[$i]->discount}}</ins><span target="dolar">$</span> </p>
                            @endif

                            @php
                                $descriptions = explode('|',$halls[$i]->description);
                            @endphp
                            @if($descriptions[0] != null)
                                <h5 class="mt-3">وصف القاعة :</h5>
                                @foreach ($descriptions as $description)
                                    <p class="pe-4"> {{$description}} </p>
                                @endforeach
                            @endif

                        </div>
                    </div>
                        @if(isset($halls[$i+1]))
                    <div class="row px-3 pt-5">
                        <div class="col-12 col-md-6 px-3 order-2 position-relative">
                                <img class="img-fluid" src="{{asset('assets/imgs/istdama.jpg')}}" targer="l_hall1" alt="">
                                <img class="img-fluid" src="{{asset('assets/imgs/slam.jpg')}}" targer="l_hall2" alt="">
                        </div>

                        <div class="col-12 col-md-6 mt-5 pt-5">
                            <h1>{{$halls[$i+1]->name }}</h1>
                            <h5>سعة القاعة :</h5>
                            <p class="pe-4"><i class="fa-solid fa-person ms-2"></i>تتسع القاعة لـ {{$halls[$i]->capacity}} شخص </p>
                            @php
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
                            @endforeach

                            <h5 class="mt-3">سعر القاعة :</h5>
                            <p class="pe-4"> سعر القاعة للحجز الواحد <strong class="fs-5">{{$halls[$i]->price}}<span target="dolar">$</span> </strong> </p>

                            @if($halls[$i]->discount != 0)
                                <h5 class="mt-3">خصم القاعة :</h5>
                                <p class="pe-4"> الخصم <strong>{{$halls[$i]->discount}} <span target="dolar">$</span></strong> </p>
                                <p class="pe-4"> السعر السابق <del>{{$halls[$i]->price}}</del><span target="dolar">$</span> السعر الحالي <ins>{{$halls[$i]->price - $halls[$i]->discount}}</ins><span target="dolar">$</span> </p>
                            @endif

                            @php
                                $descriptions = explode('|',$halls[$i+1]->description);
                            @endphp

                            @if($descriptions[0] != null)
                                <h5 class="mt-3">وصف القاعة :</h5>
                                @foreach ($descriptions as $description)
                                    <p class="pe-4"> {{$description}} </p>
                                @endforeach
                            @endif
                        </div>


                        @endif
                    </div>
                @endfor
            </div>

        </section>




@endsection
