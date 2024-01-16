@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')

     <div class="container my-bg-img">
        <div class="dashboard-top nb-5 h_7rem">
            <h3 class=" pt-5 pe-5 text-white"> قائمة الخدمات  </h3>
        </div>

        <h2 class="pb-4"> </h2>
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
                @foreach ($services as $service)

                  <tr>
                    <th scope="row">1</th>
                    <td>{{$service->name}} </td>
                    <td>{{$service->price}}</td>
                    <td>
                        <a href="{{route('services.show',$service->id)}}"> <i class="fa-solid fa-circle-info"></i>  |</a>
                        <a href="{{route('services.edit',$service->id)}}"> <i class="fa-solid fa-pen-to-square"></i> | </a>
                        <a href="{{route('services.delete',$service->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>
    </div>

@endsection



