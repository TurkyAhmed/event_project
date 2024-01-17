@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')



     <div class="dashboard-top h_7rem">
        <h3 class=" pt-5 pe-5 text-white"> قائمة الحجوزات  </h3>
    </div>

    <div class="container pt-5 pe-5">

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

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
                    <a class="  " href="{{route('reservations.show',$reservaion->id)}}"> <i class="fa-solid fa-circle-info ms-3"></i></a>
                    <a class=" " href="{{route('reservations.edit',$reservaion->id)}}"> <i class="fa-solid fa-pen-to-square ms-3"></i></a>
                    <a class=" " href="{{route('reservations.delete',$reservaion->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                </td>
              </tr>

            @php
              $counter++ ;
            @endphp
            @endforeach

        </tbody>
    </table>

    <div class="pagination justify-content-between">
        <ul class="pagination justify-content-center">
            @if ($reservations->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $reservations->previousPageUrl() }}" rel="prev">&laquo;</a>
                </li>
            @endif
            @foreach ($reservations->getUrlRange(1, $reservations->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $reservations->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach
            @if ($reservations->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $reservations->nextPageUrl() }}" rel="next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>

        <!-- Pagination label -->
        <div class="pagination-label">
            صفحة {{ $reservations->currentPage() }} من {{ $reservations->lastPage() }}
        </div>
    </div>
</div>

@endsection
