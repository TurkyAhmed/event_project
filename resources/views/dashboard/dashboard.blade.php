@extends('layouts.main_layout_without_nav')

@section('content')

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
                      <li>
                        <a href="{{route('reservations.report')}}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                            التقارير
                        </a>
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

            <div id="dashboaed-content " class="col-10 ">

                @section('dashboard-content')
                    <div class="container pt-3 pe-5">
                        <div class="dashboard-top">
                            <h3 class=" pt-5 pe-5 text-white">الاحصائيات</h3>
                        </div>

                    </div>
                    <div class="row dashboard-cards px-5 mx-3 mt-5">

                        <div class="col-10 col-md-6 col-lg-4 mb-3 ">
                            <div class=" card card_shadow w-100 px-4" >
                                <div class="row d-flex align-items-center ">
                                    <div class="card-body col-8 pe-5">
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
                            <div class=" card card_shadow w-100 px-4" >
                                <div class="row d-flex align-items-center ">
                                    <div class="card-body col-8 pe-5">
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
                            <div class=" card card_shadow w-100 px-4" >
                                <div class="row d-flex align-items-center ">
                                    <div class="card-body col-8 pe-5 ">
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

                    <div class="container ">
                        <div class="row chart_js">
                            <div class="col-12 col-md-6">
                                <div class="container">
                                    <h3 class="d-block me-5 mb-3"> حالات الحجز </h3>
                                    <div class="reservation_status me-3">

                                        <div class="chart_container">
                                            <canvas class="myChart"></canvas>
                                        </div>

                                        <div class="details">
                                            <ul class="list-unstyled">
                                            </ul>
                                        </div>
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


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        const chartDate = {



            labels : ['في الانتظار','تمت الموافقة','تم الغاء الحجز','تأخير الحجز'],
            data :[1,1,1,1],
        };

        const myChart = document.querySelector('.myChart');
        const ul = document.querySelector('.details ul');

        new Chart(myChart, {
            type: 'doughnut',
            data: {
              labels: chartDate.labels,
              datasets: [{
                label: '# of Votes',            // title when hover
                data: chartDate.data,
              }]
            },
            options: {
                borderWidth: 10,
                borderRadius: 2,
                hoverBorderWidth: 0,
                plugins:{
                    legend:{
                        display: false,
                    }
                }
            }
        });

        const reservation_statusUl = () =>{
            chartDate.labels.forEach((item,i) => {
                console.log('print ok');
                let li = document.createElement('li');
                li.innerHTML = `${item}: <span class="percentage">${chartDate.data[i]}</span>`;
                ul.appendChild(li);
            });
        }

        reservation_statusUl();

    </script>
@endsection




