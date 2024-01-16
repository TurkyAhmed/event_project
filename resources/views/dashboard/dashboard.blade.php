@extends('layouts.main_layout_dashboard')
    @section('dashboaed-content')
        <div class="container pt-3 pe-5">
            <div class="dashboard-top">
                <h3 class=" pt-5 pe-5 text-white">الاحصائيات</h3>
            </div>
        </div>
         {{-- احصائيات --}}
        <div class="row dashboard-cards px-5 mx-3 mt-5">
            <div class="col-10 col-md-6 col-lg-4 mb-3 ">
                <div class=" card card_shadow w-100 px-4" >
                    <div class="row d-flex align-items-center ">
                        <div class="card-body col-8 pe-5">
                            <h5 class="card-title"><img src="{{asset('assets/imgs/conference.png')}}" alt=""></h5>
                            <h6 class="card-subtitle mb-2 ">  القاعات </h6>
                        </div>
                        <div class="col-4">
                            {{-- <p class="fs-1">{{$viewData['hallsCount']}}</p> --}}
                            <p class="fs-1">5</p>
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
                            {{-- <p class="fs-1">{{$viewData['servicesCount']}}</p> --}}
                            <p class="fs-1">7</p>
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
                            {{-- <p class="fs-1">{{$viewData['reservationsWaitingCount']}}</p> --}}
                            <p class="fs-1">5</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-4 mb-3 ">
                <div class=" card card_shadow w-100 px-4" >
                    <div class="row d-flex align-items-center ">
                        <div class="card-body col-8 pe-5 ">
                            <h5 class="card-title"><img src="{{asset('assets/imgs/conference.png')}}" alt=""></h5>
                            <h6 class="card-subtitle mb-2 "> حجوزرات الاسبوع </h6>
                        </div>
                        <div class="col-4">
                            {{-- <p class="fs-1">{{$viewData['reservationsweekly']}}</p> --}}
                            <p class="fs-1">9</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-4 mb-3 ">
                <div class=" card card_shadow w-100 px-4" >
                    <div class="row d-flex align-items-center ">
                        <div class="card-body col-8 pe-5 ">
                            <h5 class="card-title"><img src="{{asset('assets/imgs/conference.png')}}" alt=""></h5>
                            <h6 class="card-subtitle mb-2 "> الحجوزرات الملغية </h6>
                        </div>
                        <div class="col-4">
                            {{-- <p class="fs-1">{{$viewData['reservationsCancelled']}}</p> --}}
                            <p class="fs-1">10</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-4 mb-3 ">
                <div class=" card card_shadow w-100 px-4" >
                    <div class="row d-flex align-items-center ">
                        <div class="card-body col-8 pe-5 ">
                            <h5 class="card-title"><img src="{{asset('assets/imgs/conference.png')}}" alt=""></h5>
                            <h6 class="card-subtitle mb-2 "> العملاء  </h6>
                        </div>
                        <div class="col-4">
                            {{-- <p class="fs-1">{{$viewData['usersCount']}}</p> --}}
                            <p class="fs-1">12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Chart js --}}
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
        {{-- Reservation waiting --}}
        <div class="container">
                        <h2 class="pb-4"> قائمة الحجوزات المنتظرة</h2>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col"> عنوان الحجز  </th>
                                <th scope="col">  الجهة الحاجزة </th>
                                <th scope="col">  الحالة </th>
                                <th scope="col">  من تاريخ </th>
                                <th scope="col">  إلى تاريخ </th>
                                <th scope="col"> الإجراءات </th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1 ;
                                @endphp
                                @foreach ($reservationsWaiting as $reservaion)

                                  <tr>
                                    <th scope="row">{{$counter}}</th>
                                    <td>{{$reservaion->title}} </td>
                                    <td>{{$reservaion->name}}</td>
                                    <td>{{$reservaion->status}}</td>
                                    <td>{{$reservaion->date_from}}</td>
                                    <td>{{$reservaion->date_to}}</td>
                                    <td>
                                        <a class=" btn btn-primary " href="{{route('reservations.reservationApproved',$reservaion->id)}}"> تأكيد الحجز </a>
                                        <a class=" btn btn-secondary " href="{{route('reservations.reservationcancelled',$reservaion->id)}}"> الغاء الحجز </a>

                                    </td>
                                  </tr>

                                @php
                                  $counter++ ;
                                @endphp
                                @endforeach

                            </tbody>
                        </table>

                         <!-- this for customized pagination links with bootstrap -->
                        <div class="pagination d-flex justify-content-between">
                            <ul class="pagination justify-content-center">
                                @if ($reservationsWaiting->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">&laquo;</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $reservationsWaiting->previousPageUrl() }}" rel="prev">&laquo;</a>
                                    </li>
                                @endif
                                @foreach ($reservationsWaiting->getUrlRange(1, $reservationsWaiting->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $reservationsWaiting->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach
                                @if ($reservationsWaiting->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $reservationsWaiting->nextPageUrl() }}" rel="next">&raquo;</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">&raquo;</span>
                                    </li>
                                @endif
                            </ul>

                            <!-- Pagination label -->
                            <div class="pagination-label ةس-5">
                                صفحة {{ $reservationsWaiting->currentPage() }} من {{ $reservationsWaiting->lastPage() }}
                            </div>

                        </div>



        </div>

        {{-- javaScript --}}
        @push('javascript')
        <script>
            const chartDate = {
                labels: @json($labels),
                data: @json($data),
                //labels : ['في الانتظار','تمت الموافقة','تم الغاء الحجز','تأخير الحجز'],
                //data :[1,1,1,1],
            }
            const myChart = document.querySelector('.myChart');
            const ul = document.querySelector('.details ul')
            new Chart(myChart, {
                type: 'doughnut',
                data: {
                  labels: chartDate.labels,
                  datasets: [{
                    label: '# of Votes',            // title when hover
                    data: chartDate.data,
                    // backgroundColor: ['#2c9bc5','#164e64','#0f3645','#4db1d7'],
                    backgroundColor: ['#f00','#000','#0f0','#00f','#7fb9cf'],
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
            })
            const reservation_statusUl = () =>{
                chartDate.labels.forEach((item,i) => {
                    console.log('print ok');
                    let li = document.createElement('li');
                    li.innerHTML = `${item}: <span class="percentage">${chartDate.data[i]}</span>`;
                    ul.appendChild(li);
                });
            }
            reservation_statusUl()
        </script>
        @endpush
    @endsection

