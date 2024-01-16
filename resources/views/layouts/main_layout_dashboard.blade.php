@extends('layouts.main_layout_without_nav')

@section('content')

@php
    if(!isset($link_active)){
        $link_active = 'main';
    }
@endphp

    <div class="container-fluid">
        <div class="row">
            <div id="dashboaed-sidebar" class="col-2 position-fiexd ">
                <div  class=" d-flex flex-column flex-shrink-0 p-3 bg-light h_100vh" style="width: 280px;">
                    <a href="/" class="my-bg-grad d-flex align-items-center mb-3 mb-md-0  link-dark text-decoration-none">
                      <img src="{{asset('assets/imgs/event-logo.png')}}" style="width: 90px" alt="">
                      <span class="fs-4 text-white"> حدث تايم </span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                      <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link {{$link_active == 'main'? 'active' : '' }}" aria-current="page">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                          الرئيسية
                        </a>
                      </li>
                      <li>
                        <a href="{{route('halls.index')}}" class="nav-link link-dark {{$link_active == 'halls'? 'active' : '' }}">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                          القاعات
                        </a>
                      </li>
                      <li>
                        <a href="{{route('services.index')}}" class="nav-link link-dark {{$link_active == 'services'? 'active' : '' }}">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                          الخدمات
                        </a>
                      </li>
                      <li>
                        <a href="{{route('employees.index')}}" class="nav-link link-dark {{$link_active == 'employees'? 'active' : '' }}">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                          الموظفين
                        </a>
                      </li>
                      {{-- <li>
                        <a href="{{route('users.index')}}" class="nav-link link-dark {{$link_active == 'users'? 'active' : '' }}">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                          المستخدمين
                        </a>
                      </li> --}}
                      <li>
                        <a href="{{route('reservations.index')}}" class="nav-link link-dark {{$link_active == 'reservations'? 'active' : '' }}">
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
                        <a href="{{route('reservations.getCalender')}}" class="nav-link link-dark {{$link_active == 'calender'? 'active' : '' }}">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                           التقويم
                        </a>
                      </li>
                      <li>
                        <a href="{{route('reservations.report')}}" class="nav-link link-dark reports">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                            التقارير
                        </a>
                      </li>


                      <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#reservations-collapse" aria-expanded="false">
                          الحجوزات
                        </button>
                        <div class="collapse" id="reservations-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded text-decuration-none">الحجوزات المنتظرة</a></li>
                            <li><a href="#" class="link-dark rounded text-decuration-none">Profile</a></li>
                            <li><a href="#" class="link-dark rounded text-decuration-none">Settings</a></li>
                            <li><a href="#" class="link-dark rounded text-decuration-none">Sign out</a></li>
                          </ul>
                        </div>
                      </li>



                    </ul>







                    <hr>
                    <div class="dropdown">
                      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle mx-2">
                        <strong class="ms-4">{{auth()->user()->name}}</strong>
                      </a>
                      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="{{route('profile.show')}}">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <li><button class="dropdown-item" href="#">تسجيل الخروج</button></li>
                        </form>
                      </ul>
                    </div>
                </div>

            </div>

            <div id="dashboaed-content " class="col-10 pe_2rem">

                @yield('dashboaed-content')





            </div>
        </div>
    </div>

        @endsection

