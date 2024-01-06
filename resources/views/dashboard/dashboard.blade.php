@extends('layouts.main_layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div id="dashboaed-sidebar" class=" d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                    {{-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                      <span class="fs-4">Sidebar</span>
                    </a>
                    <hr>--}}
                    <ul class="nav nav-pills flex-column mb-auto">
                      <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link active" aria-current="page">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                          الرئيسية
                        </a>
                      </li>
                      <li>
                        <a href="{{route('halls.index')}}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                          القاعات
                        </a>
                      </li>
                      <li>
                        <a href="{{route('services.index')}}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                          الخدمات
                        </a>
                      </li>
                      <li>
                        <a href="{{route('employees.index')}}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                          الموظفين
                        </a>
                      </li>
                      <li>
                        <a href="{{route('users.index')}}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                          المستخدمين
                        </a>
                      </li>
                      <li>
                        <a href="{{route('reservations.index')}}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                          الحجوزات
                        </a>
                      </li>
                      <li>
                        <a href="{{route('reservations.reservation_waiting')}}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                          الحجوزرات المنتظرة
                        </a>
                      </li>
                      <li>
                        <a href="{{route('reservations.getCalender')}}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                           التقويم
                        </a>
                      </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle mx-2">
                        <strong class="ms-4">تركي احمد</strong>
                      </a>
                      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                      </ul>
                    </div>
                </div>

            </div>

            <div class="col-10 ">
                {{-- @yield('dashboard-content') --}}
                @section('dashboard-content')
                    <div class="row dashboard-cards px-5 mx-3 mt-5">

                        <div class="col-10 col-md-6 col-lg-4 mb-3 ">
                            <div class=" card  width-100 px-4" >
                                <div class="row d-flex align-items-center">
                                    <div class="card-body col-8">
                                        <h5 class="card-title"><img src="{{asset('assets/imgs/conference.png')}}" alt=""></h5>
                                        <h6 class="card-subtitle mb-2 ">  القاعات </h6>
                                    </div>
                                    <div class="col-4">
                                        <p class="fs-1">6</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-10 col-md-6 col-lg-4 mb-3 ">
                            <div class=" card  width-100 px-4" >
                                <div class="row d-flex align-items-center">
                                    <div class="card-body col-8">
                                        <h5 class="card-title"><img src="{{asset('assets/imgs/conference.png')}}" alt=""></h5>
                                        <h6 class="card-subtitle mb-2 ">  الخدمات </h6>
                                    </div>
                                    <div class="col-4">
                                        <p class="fs-1">16</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-10 col-md-6 col-lg-4 mb-3 ">
                            <div class=" card  width-100 px-4" >
                                <div class="row d-flex align-items-center">
                                    <div class="card-body col-8">
                                        <h5 class="card-title"><img src="{{asset('assets/imgs/conference.png')}}" alt=""></h5>
                                        <h6 class="card-subtitle mb-2 "> الحجوزرات المنتظرة </h6>
                                    </div>
                                    <div class="col-4">
                                        <p class="fs-1">3</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @show
                {{-- <div id="dashboard-content">
                    <!-- Content goes here -->
                </div> --}}
            </div>
        </div>
    </div>

@endsection




