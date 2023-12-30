@extends('layouts.main_layout')

@section('content')
<h1> حذف المستخدم </h1>
<h4> هل تريد فعلاً حذف هذا المستخدم  </h4>

{{-- TODO /list details --}}

<form action="{{route('users.destroy',$user->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="تأكيد الحذف">
</form>
@endsection
