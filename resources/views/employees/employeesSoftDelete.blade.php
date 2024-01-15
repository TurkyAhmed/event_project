{{-- @extends('layouts.main_layout')
@section('content') --}}
@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


    <div class="container pt-5 pe-5">

        <h1> كل الموظفين المحذوفة </h1>
        <table class="table table-dark table-striped mt-2">
            <div class="container pt-5">
                <a class="btn btn-primary" href="{{route('employees.create')}}"> إضافة خدمة </a>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> اسم الموظف  </th>
                        <th scope="col"> العنوان </th>
                        <th scope="col"> الإجراءات </th>
                      </tr>
                    </thead>
            <tbody>
                @foreach ($Services as $Service)

                <tr>
                  <th scope="row">1</th>
                  <td>{{$Service->name}} </td>
                  <td>{{$Service->price}}</td>
                    <td>
                        {{-- <a class="btn btn-primary" href="post/edit/{{$post->id}}"> Edit</a> --}}
                        <a class="btn btn-primary" href="{{route('employees.restore',$Service->id)}}"> Restore</a>
                        <form action="{{route('employees.forcedelete',$Service->id)}}" method="get" class="d-inline-block">
                            @csrf
                            {{-- @method('DELETE') --}}
                            <button type="submit" class="btn btn-danger">Force Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    @endsection

