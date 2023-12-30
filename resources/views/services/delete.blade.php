@extends('layouts.main_layout')

@section('content')
<h1> حذف الخدمة </h1>
<h4> هل تريد فعلاً حذف هذة القاعة </h4>

{{-- TODO /list details --}}

<form action="{{route('services.destroy',$service->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="تأكيد الحذف">
</form>
@endsection
