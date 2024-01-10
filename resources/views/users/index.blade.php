@extends('dashboard.dashboard')
@section('dashboard-content')

    <div class="container pt-5 pe-5">
        <h2 class="pb-4"> قائمة المستخدمين </h2>
        @if (auth()->user()->role_id !=2)
            <a class="btn btn-outline-primary my-bg-grad mb-3" href="{{route('users.create')}}"> إضافة مستخدم  </a>
        @endif
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> اسم المستخدم  </th>
                <th scope="col">  البريد الالكتروني  </th>
                <th scope="col"> الإجراءات </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                  <tr>
                    <th scope="row">1</th>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('users.show',$user->id)}}"> <i class="fa-solid fa-circle-info"></i>  |</a>
                        <a href="{{route('users.edit',$user->id)}}"> <i class="fa-solid fa-pen-to-square"></i> | </a>
                        <a href="{{route('users.delete',$user->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>

        <!-- this for laravel-->
        {{-- <div class="fs-5">
            {!! $users->links() !!}
        </div> --}}

        <!-- this for customized pagination links with bootstrap -->
        <div class="pagination">
            <ul class="pagination justify-content-center">
                @if ($users->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $users->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                @endif
                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $users->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
                @if ($users->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $users->nextPageUrl() }}" rel="next">&raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">&raquo;</span>
                    </li>
                @endif
            </ul>
        </div>

        <!-- Pagination label -->
        <div class="pagination-label">
            Page {{ $users->currentPage() }} of {{ $users->lastPage() }}
        </div>


    </div>

@endsection



