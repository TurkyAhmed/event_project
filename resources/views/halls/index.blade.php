@extends('layouts.main_layout')

@section('content')
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
                        <a href="{{route('halls.show',$hall->id)}}"> تفاصيل </a>
                        <a href="{{route('halls.edit',$hall->id)}}"> تعديل </a>
                        <a href="{{route('halls.delete',$hall->id)}}"> حذف </a>
                    </td>
                  </tr>

                @endforeach

            </tbody>
        </table>
    </div>

@endsection



