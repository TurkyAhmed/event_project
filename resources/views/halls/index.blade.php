
@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')

    <div class="dashboard-top h_7rem">
        <h3 class=" pt-5 pe-5 text-white"> قائمة القاعات  </h3>
    </div>

    <div class="container pt-5 pe-5">

        @if(session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif

        <a class="btn btn-outline-primary my-bg-grad mb-3" href="{{route('halls.create')}}"> إضافة قاعة  </a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> الاسم  </th>
                <th scope="col"> السعر </th>
                <th scope="col"> الإجراءات </th>
              </tr>
            </thead>
            <tbody>
                @for ($i=0; $i < count($halls); $i++)
                  <tr>
                    <th scope="row">{{$i +1}}</th>
                    <td>{{$halls[$i]->name}} </td>
                    <td><strong>{{$halls[$i]->price}} $</strong></td>
                    <td>
                        <a class="ps-3 fs-5 " href="{{route('halls.show',$halls[$i]->id)}}"> <i class="fa-solid fa-circle-info"></i> </a>
                        <a class="ps-3 fs-5" href="{{route('halls.edit',$halls[$i]->id)}}"> <i class="fa-solid fa-pen-to-square"></i> </a>
                        <a class="fs-5 " href="{{route('halls.delete',$halls[$i]->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                  </tr>

                  @endfor

            </tbody>
        </table>

        <div class="pagination justify-content-between">
            <ul class="pagination justify-content-center">
                @if ($halls->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $halls->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                @endif
                @foreach ($halls->getUrlRange(1, $halls->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $halls->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
                @if ($halls->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $halls->nextPageUrl() }}" rel="next">&raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">&raquo;</span>
                    </li>
                @endif
            </ul>

            <!-- Pagination label -->
            <div class="pagination-label">
                صفحة {{ $halls->currentPage() }} من {{ $halls->lastPage() }}
            </div>
        </div>
        
    </div>

@endsection



