@extends('layouts.main_layout')

@section('content')
<h1> حذف الموظف </h1>
<h4> هل تريد فعلاً حذف هذا الموظف  {{$user_with_employee->name}} </h4>
<h6>  وعنوانه {{$user_with_employee->employee->address}}</h6>

{{-- TODO /list details --}}

<form action="{{route('employees.destroy',$user_with_employee->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="تأكيد الحذف">
</form>
@endsection
