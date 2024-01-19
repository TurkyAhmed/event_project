@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')

    <div class="container px-0 my-bg-img">
        <div class="dashboard-top  h_7rem">
            <h3 class=" pt-5 pe-5 text-white"> قائمة الخدمات  </h3>
        </div>
    </div>

    <div class="container pt-5 pe-5">
        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
        </div>
        @endif

        <a class="btn btn-outline-primary my-bg-grad mb-3" href="{{route('services.create')}}"> إضافة خدمة  </a>
                <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> اسم الخدمة  </th>
                <th scope="col"> سعر الخدمة </th>
                <th scope="col"> الإجراءات </th>
              </tr>
            </thead>
            <tbody>
               @for ($i=0; $i < count($services); $i++)
                  <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$services[$i]->name}} </td>
                    <td><strong>{{$services[$i]->price}}$</strong></td>
                    <td>
                        <a  href="{{route('services.show',$services[$i]->id)}}"> <i class="fa-solid fa-circle-info ms-3"></i>  </a>
                        <a  href="{{route('services.edit',$services[$i]->id)}}"> <i class="fa-solid fa-pen-to-square ms-3"></i>  </a>
                        <a  href="{{route('services.delete',$services[$i]->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                  </tr>

                  @endfor

            </tbody>
        </table>

        <div class="pagination justify-content-between">
            <ul class="pagination justify-content-center">
                @if ($services->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $services->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                @endif
                @foreach ($services->getUrlRange(1, $services->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $services->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
                @if ($services->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $services->nextPageUrl() }}" rel="next">&raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">&raquo;</span>
                    </li>
                @endif
            </ul>

            <!-- Pagination label -->
            <div class="pagination-label">
                صفحة {{ $services->currentPage() }} من {{ $services->lastPage() }}
            </div>
        </div>

    </div>

@endsection



