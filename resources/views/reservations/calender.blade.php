@extends('dashboard.dashboard')

@section('dashboard-content')

    <style>
        #calendar{
            height: calc(100vh - 5rem);
        }
        .bg-gradient-danger{
            color: #fff;
            background-image: linear-gradient(45deg,#6eabc2,#506c6a);
        }
    </style>


    <div class="card card-calendar">
        <div class="card-body p-3">
          <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
        </div>
    </div>

    <script src="{{asset('assets/js/index.global.js')}}"></script>
    <script>
        var reservation_from_database = @json($reservations);
    </script>
    <script src="{{asset('assets/js/calender.js')}}"></script>

@endsection


