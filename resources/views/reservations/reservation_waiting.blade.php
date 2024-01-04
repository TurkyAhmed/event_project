@extends('dashboard.dashboard')

@section('dashboard-content')

<div class="container pt-5 pe-5">
    <h2 class="pb-4"> قائمة الحجوزات </h2>
    <a class="btn btn-outline-primary my-bg-grad mb-3" href="{{route('reservations.create')}}"> إضافة حجز  </a>
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
                <td>{{$reservaion->user_id}}</td>
                <td>{{$reservaion->status}}</td>
                <td>{{$reservaion->date_from}}</td>
                <td>{{$reservaion->date_to}}</td>
                <td>
                    <a class=" btn btn-primary " href="{{route('reservations.reservationApproved',$reservaion->id)}}"> تأكيد الحجز </a>
                    {{-- <a class=" " href="{{route('reservations.edit',$reservaion->id)}}"> <i class="fa-solid fa-pen-to-square"></i> |</a>
                    <a class=" " href="{{route('reservations.delete',$reservaion->id)}}"> <i class="fa-solid fa-trash"></i> </a> --}}
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
