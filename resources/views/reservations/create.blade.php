@extends('layouts.main_layout')
@section('content')

    <section>
        <div class="reservation">
            <div class="container">
                <div class="row px-5">

                    <div class="col-4">
                        <div class="mb-3">
                            <label for="title" class="form-label"> عنوان الحجز </label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}" id="title" placeholder=" عنوان الحجز ">
                            @error('title')
                                <div class="text-danger fs-6">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label"> الفترة </label>
                            <select name="" id=""></select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
