{{-- @extends('layouts.main_layout')

@section('content') --}}

@extends('dashboard.dashboard')
@section('dashboard-content')

    <div class="container pt-5 pe-5">
        <h2 class="pb-4"> قائمة القاعات </h2>
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
                @foreach ($halls as $hall)

                  <tr>
                    <th scope="row">1</th>
                    <td>{{$hall->name}} </td>
                    <td>{{$hall->price}}</td>
                    <td>
                        <a class="  " href="{{route('halls.show',$hall->id)}}"> <i class="fa-solid fa-circle-info"></i> |</a>
                        <a class=" " href="{{route('halls.edit',$hall->id)}}"> <i class="fa-solid fa-pen-to-square"></i> |</a>
                        <a class=" " href="{{route('halls.delete',$hall->id)}}"> <i class="fa-solid fa-trash"></i> </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>
    </div>

@endsection



