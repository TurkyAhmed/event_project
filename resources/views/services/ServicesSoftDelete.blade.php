@extends('layouts.main_layout')

@section('content')
    <div class="container pt-5">

        <h1> كل الخدمات المحذوفة </h1>
        <table class="table table-dark table-striped mt-2">
            <div class="container pt-5">
                <a class="btn btn-primary" href="{{route('services.create')}}"> إضافة خدمة </a>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> اسم الخدمة  </th>
                        <th scope="col"> السعر </th>
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
                        <a class="btn btn-primary" href="{{route('services.restore',$Service->id)}}"> Restore</a>
                        <form action="{{route('services.forcedelete',$Service->id)}}" method="get" class="d-inline-block">
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

