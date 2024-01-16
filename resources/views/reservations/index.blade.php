@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


     <div class="container my-bg-img">
        <div class="dashboard-top nb-5 h_7rem">
            <h3 class=" pt-5 pe-5 text-white">  قائمة الحجوزات   </h3>
        </div>

    <a class="btn btn-outline-primary my-bg-grad my-3" href="{{route('reservations.create')}}"> إضافة حجز  </a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"> عنوان الحجز  </th>
            <th scope="col">  الجهةالحاجزة </th>
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
            @foreach ($reservations as $reservaion)

              <tr>
                <th scope="row">{{$counter}}</th>
                <td>{{$reservaion->title}} </td>
                <td>{{$reservaion->username}}</td>
                <td>{{$reservaion->status}}</td>
                <td>{{$reservaion->date_from}}</td>
                <td>{{$reservaion->date_to}}</td>
                <td>
                    <a class="  " href="{{route('reservations.show',$reservaion->id)}}"> <i class="fa-solid fa-circle-info"></i> |</a>
                    <a class=" " href="{{route('reservations.edit',$reservaion->id)}}"> <i class="fa-solid fa-pen-to-square"></i> |</a>
                    <a class=" " href="{{route('reservations.delete',$reservaion->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                </td>
              </tr>

            @php
              $counter++ ;
            @endphp
            @endforeach

        </tbody>
    </table>
</div>

@endsection
