@extends('layouts.main_layout')

@section('content')
    <div class="container pt-5">
        <a class="btn btn-primary" href="{{route('services.create')}}"> إضافة خدمة </a>
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
                        <a href="{{route('services.show',$service->id)}}"> تفاصيل </a>
                        <a href="{{route('services.edit',$service->id)}}"> تعديل </a>
                        <a href="{{route('services.delete',$service->id)}}"> حذف </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>
    </div>

@endsection



