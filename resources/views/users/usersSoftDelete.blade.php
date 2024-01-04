@extends('dashboard.dashboard')
@section('dashboard-content')

    <div class="container pt-5 pe-5">

        <h1> كل المستخدمين المحذوفين </h1>

        <table class="table table-dark table-striped mt-2">
            <div class="container pt-5">
                <a class="btn btn-primary" href="{{route('users.create')}}"> إضافة مستخدم </a>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> الاسم  </th>
                        <th scope="col"> البريد </th>
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
                        {{-- <a class="btn btn-primary" href="post/edit/{{$post->id}}"> Edit</a> --}}
                        <a class="btn btn-primary" href="{{route('users.restore',$user->id)}}"> Restore</a>
                        <form action="{{route('users.forcedelete',$user->id)}}" method="get" class="d-inline-block">
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

