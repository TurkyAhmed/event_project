@extends('layouts.main_layout')
@section('content')

    <section>
        <div class="reservation">
            <div class="container">
                <div class=" px-5 mt-5 d-flex align-items-center">

                    <form action="{{route('reservations.store')}}" method="POST">
                        @csrf

                        <div class="row reservation_main_details bg-light">

                            <div class="col-10 col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="title" class="form-label"> عنوان الحجز </label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}" id="title" placeholder=" عنوان الحجز ">
                                @error('title')
                                    <div class="text-danger fs-6">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>

                            <div class="col-10 col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="interval">الفترة</label>
                                <select class="form-control" id="interval" name="interval">
                                    <option selected disabled >--اختار الفترة--</option>
                                    <option value="morning">صباح</option>
                                    <option value="evening">مساء</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-10 col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="type_of_event">نوع الحجز</label>
                                <select class="form-control" id="type_of_event" name="type_of_event">
                                    <option selected disabled >--اختار نوع الحدث--</option>
                                    <option value="مؤتمر">مؤتمر</option>
                                    <option value="ندوة"> ندوة </option>
                                    <option value="ورشة عمل">ورشة عمل</option>
                                    <option value="تدريب"> تدريب </option>
                                </select>
                            </div>
                            </div>

                            <div class="col-10 col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="date_from" class="form-label">  من تاريخ </label>
                                <input type="date" name="date_from" class="form-control" value="{{ old('date_from', date('Y-m-d'))}}" id="date_from" >
                                @error('date_from')
                                    <div class="text-danger fs-6">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>

                            <div class="col-10 col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="date_to" class="form-label">  من تاريخ </label>
                                <input type="date" name="date_to" class="form-control" value="{{ old('date_to', date('Y-m-d'))}}" id="date_to" >
                                @error('date_to')
                                    <div class="text-danger fs-6">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>

                            <div class="col-10 col-md-6 col-lg-4">
                            <div class="mb-3">
                                <label for="note" class="form-label">  تفاصيل اخرى </label>
                                <input type="text" name="note" class="form-control" value="{{old('note')}}" id="note" placeholder="  تفاصيل اخرى ">
                                @error('note')
                                    <div class="text-danger fs-6">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div id="reservation_hall_with_services">
                            <div class="mb-3">
                                <label for="interval">القاعة</label>
                                <select class="form-control" id="interval" name="hall_id">
                                    <option selected disabled >--اختار القاعة--</option>
                                    @foreach ($halls as $hall )
                                        <option value="{{$hall->id}}" >{{$hall->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                @foreach ($services as $service )
                                    <div class="col-12 col-md-2 col-lg-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{$service->id}}" name="service_id[]" id="services_{{$service->name}}">
                                            <label class="form-check-label" for="services_{{$service->name}}"> {{$service->name}} </label>
                                        </div>
                                    </div>
                                @endforeach

                            </div>



                        </div>

                        <div id="reservation_hall_with_services">
                            <div class="mb-3">
                                <label for="interval">القاعة</label>
                                <select class="form-control" id="interval" name="hall_id">
                                    <option selected disabled >--اختار القاعة--</option>
                                    @foreach ($halls as $hall )
                                        <option value="{{$hall->id}}" >{{$hall->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                @foreach ($services as $service )
                                    <div class="col-12 col-md-2 col-lg-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{$service->id}}" name="service_id[]" id="services_{{$service->name}}">
                                            <label class="form-check-label" for="services_{{$service->name}}"> {{$service->name}} </label>
                                        </div>
                                    </div>
                                @endforeach

                            </div>



                        </div>

                        <button type="submit" class="btn btn-primary "> حجز </button>
                    </form>



                </div>
            </div>
        </div>
    </section>

@endsection
