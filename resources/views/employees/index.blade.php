
@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


     <div class="dashboard-top h_7rem">
        <h3 class=" pt-5 pe-5 text-white"> قائمة الموظفين  </h3>
    </div>

    <div class="container pt-5 pe-5">

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <a class="btn btn-outline-primary my-bg-grad mb-3" href="{{route('employees.create')}}"> إضافة موظف  </a>        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> اسم الموظف  </th>
                <th scope="col"> عنوان الموظف  </th>
                <th scope="col">  البريد الالكتروني  </th>
                <th scope="col"> الإجراءات </th>
              </tr>
            </thead>
            <tbody>
              @for ($i=0; $i < count($employees); $i++)
                  <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$employees[$i]->name}} </td>
                    <td>{{$employees[$i]->address}} </td>
                    <td>{{$employees[$i]->email}}</td>
                    <td>
                        <a href="{{route('employees.show',$employees[$i]->id)}}"> <i class="fa-solid fa-circle-info ms-3"></i> </a>
                        <a href="{{route('employees.edit',$employees[$i]->id)}}"> <i class="fa-solid fa-pen-to-square ms-3"></i>  </a>
                        <a href="{{route('employees.delete',$employees[$i]->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                  </tr>
                @endfor

            </tbody>
        </table>
        <div class="pagination justify-content-between">
            <ul class="pagination justify-content-center">
                @if ($employees->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $employees->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                @endif
                @foreach ($employees->getUrlRange(1, $employees->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $employees->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
                @if ($employees->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $employees->nextPageUrl() }}" rel="next">&raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">&raquo;</span>
                    </li>
                @endif
            </ul>

            <!-- Pagination label -->
            <div class="pagination-label">
                صفحة {{ $employees->currentPage() }} من {{ $employees->lastPage() }}
            </div>
        </div>
    </div>

@endsection



