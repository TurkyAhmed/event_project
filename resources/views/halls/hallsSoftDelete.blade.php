{{-- @extends('layouts.main_layout')

@section('content') --}}

@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')

     <div class="dashboard-top h_7rem">
        <h3 class=" pt-5 pe-5 text-white">  القاعات  </h3>
    </div>

    <div class="form-fram mt-5">
        <h1> كل القاعات المحذوفة </h1>

        <table class="table table-dark table-striped mt-2">
            <div class="container pt-5">
                <a class="btn btn-primary" href="{{route('halls.create')}}"> إضافة قاعة </a>
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
                        {{-- <a class="btn btn-primary" href="post/edit/{{$post->id}}"> Edit</a> --}}
                        <a class="btn btn-primary" href="{{route('halls.restore',$hall->id)}}"> Restore</a>
                        <form action="{{route('halls.forcedelete',$hall->id)}}" method="get" class="d-inline-block">
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

