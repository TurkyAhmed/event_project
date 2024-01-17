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
    </div>

@endsection



