@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')

    <style>
        '#2c9bc5','#164e64','#0f3645','#4db1d7'
        #calendar{
            height: calc(100vh - 5rem);
        }
        .bg-cancel{
            color: #fff;
            background-image: linear-gradient(310deg,#df6868,#ff667c);
        }
        .bg-waiting{
            background-color: #2c9bc5;
            color: #fff;
        }
        .bg-approved{
            background-color: #164e64;

            color: #fff;
        }
        .bg-late{
            background-image: linear-gradient(45deg,#6eabc2,#506c6a);
            color: #000;
        }
    </style>

<div class="dashboard-top h_7rem">
    <h3 class=" pt-5 pe-5 text-white"> التقويم </h3>
</div>

<div class="container pt-5 pe-5">




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


