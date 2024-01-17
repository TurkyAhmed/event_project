@extends('layouts.main_layout')
@section('content')

<section class="landindpage_halls_hero h_100vh">
    <div id="carousellandindpage_halls_hero" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src='{{asset("assets/imgs/".$imgs[0])}}' class="d-block w-100" alt="...">
          </div>
          @for ($i=1; $i < count($imgs); $i++)
            <div class="carousel-item">
              <img src='{{asset("assets/imgs/".$imgs[$i])}}' class="d-block w-100" alt="...">
            </div>
          @endfor
        </div>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="0" class="active thumbail" aria-current="true" aria-label="Slide 1">
                <img src='{{asset("assets/imgs/".$imgs[0])}}' class="d-block w-100" alt="...">
            </button>
            @for ($i=1; $i < count($imgs); $i++)
                <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="{{$i}}" class=" thumbail" aria-current="true" aria-label="Slide {{$i+1}}">
                    <img src='{{asset("assets/imgs/".$imgs[$i])}}' class="d-block w-100" alt="...">
                </button>
            @endfor
        </div>
    </div>
</section>

    <div class="container pt-5 mt-5">
        <div class="row">
            <h1 class="mb-5"> {{$hall->name}}</h1>

            <h4> سعر القاعة :</h4>
            <p class="pe-4 fs-5">سعر القاعة للحجز الواحد  <strong>{{$hall->price}}<span target="dolar">$</span></strong> </p>
            @if($hall->discount != 0)
                <h5 class="mt-3">خصم القاعة :</h5>
                <p class="pe-4 fs-5"> الخصم <strong>{{$hall->discount}}<span target="dolar">$</span></strong> </p>
                <p class="pe-4 fs-5"> السعر السابق <del>{{$hall->price}}</del><span target="dolar">$</span> السعر الحالي <ins>{{$hall->price - $hall->discount}}</ins><span target="dolar">$</span> </p>
            @endif

            @php
                $descriptions = explode('|',$hall->description);
            @endphp
            <h4 class="mt-3"> سعة القاعة : </h4>
            @if($descriptions[0] != null)
                <p class="fs-5 pe-5"> تتسع القاعة للـ {{$hall->capacity}} شخص , ولكن قد تختلف سعتها على حسب نظام ترتيب الطاولات وسيكون سعتها موضحا بالشكل التالي :</p>
                <div class="row mb-5">
                    @foreach ($descriptions as $description)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="card_shadow card_hover">
                              <p class="pe-2 pt-2 fs-5"> {{$description}} </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
            <p class="fs-5 pe-5 mb-5"> تتسع القاعة للـ {{$hall->capacity}} شخص. </p>
            @endif

            @php
                $features = explode('|',$hall->feature);
            @endphp
            <h4> مميزات القاعة :</h4>
            <div class="row mb-5">
                @foreach ($features as $feature)
                  {{-- <div class="col-12 col-md-4 "> --}}
                      {{-- <div class="card_shadow_left d-flex mb-3"> --}}
                          @if(str_contains($feature,'مساحة'))
                              <div class="col-12 col-md-4 ">
                                  <div class="card_shadow card_hover d-flex mb-3">
                                      {{-- <i class="fa-solid fa-ruler-combined "></i> --}}
                                      <p class="pe-4 fs-5"> {{$feature}}</p>
                                  </div>
                                </div>
                          @elseif (str_contains($feature,'إمكانية'))
                              <div class="col-12 col-md-4 ">
                                  <div class="card_shadow card_hover d-flex mb-3">
                                      <p  class="pe-4 fs-5">{{$feature}}</p>
                                  </div>
                              </div>
                          @elseif (str_contains($feature,'مكيفة'))
                              <div class="col-12 col-md-4 ">
                                  <div class="card_shadow card_hover d-flex mb-3">
                                      {{-- <i class="fa-regular fa-snowflake"></i> --}}
                                      <p class="pe-4 fs-5"> {{$feature}} </p>
                                  </div>
                              </div>
                          @elseif (str_contains($feature,'إنترنت'))
                              <div class="col-12 col-md-4 ">
                                  <div class="card_shadow card_hover d-flex mb-3">
                                        {{-- <i class="fa-solid fa-wifi"></i> --}}
                                      <p class="pe-4 fs-5"> {{$feature}} </p>
                                  </div>
                              </div>
                          @elseif (str_contains($feature,'شاشة '))
                              <div class="col-12 col-md-4 ">
                                  <div class="card_shadow card_hover d-flex mb-3">
                                      {{-- <i class="fa-solid fa-tv"></i> --}}
                                      <p class="pe-4 fs-5"> {{$feature}} </p>
                                  </div>
                              </div>
                          @elseif (str_contains($feature,'ستاند'))
                              <div class="col-12 col-md-4 ">
                                  <div class="card_shadow card_hover d-flex mb-3">
                                      {{-- <img src="{{asset('assets/imgs/stand.svg')}}" target="icon_size" alt=""> --}}
                                      <p class="pe-4 fs-5">{{$feature}} </p>
                                  </div>
                                </div>
                          @elseif (str_contains($feature,'الياف'))
                              <div class="col-12 col-md-4 ">
                                  <div class="card_shadow card_hover d-flex mb-3">
                                      {{-- <img src="{{asset('assets/imgs/sticky_notes_icon.svg')}}" target="icon_size" alt=""> --}}
                                      <p class="pe-4 fs-5">{{$feature}} </p>
                                  </div>
                              </div>
                          @endif
                      {{-- </div> --}}
                  {{-- </div> --}}

                @endforeach
            </div>
        </div>
    </div>

@endsection
