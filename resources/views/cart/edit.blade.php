@extends('layouts.main_layout')
@section('content')

    <section class="landindpage_halls_hero h_100vh">
    <div id="carousellandindpage_halls_hero" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src='{{asset("assets/imgs/".$imgs[0])}}' class="d-block w-100" alt="...">
          </div>
          @for ($i=1; $i < count($imgs); $i++)
            <div class="carousel-item">
              <img src='{{asset("assets/imgs/".$imgs[$i])}}' class="d-block w-100" alt="...">
            </div>
          @endfor
        </div>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="0" class="active thumbail" aria-current="true" aria-label="Slide 1">
                <img src='{{asset("assets/imgs/".$imgs[0])}}' class="d-block w-100" alt="...">
            </button>
            @for ($i=1; $i < count($imgs); $i++)
                <button type="button" data-bs-target="#carousellandindpage_halls_hero" data-bs-slide-to="{{$i}}" class=" thumbail" aria-current="true" aria-label="Slide {{$i+1}}">
                    <img src='{{asset("assets/imgs/".$imgs[$i])}}' class="d-block w-100" alt="...">
                </button>
            @endfor
        </div>
    </div>
    </section>

    <section class="reservation_details_services my-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-4 bg-light">
                        <div class="container">
                            <h3 class="text-center"> الخدمات المتوفره </h3>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">اسم الخدمة</th>
                                    <th scope="col">الكمية</th>
                                    <th scope="col">سعر الواحد</th>
                                    <th scope="col"> الاجراءات </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allsevices as $service)
                                    <tr >
                                        <th  scope="row">1</th>
                                        <td >{{$service->name}}<input type="hidden" name="service_id[]" value="{{$service->id}}"></td>
                                        <td >1 </td>
                                        <td > {{$service->price}}</td>
                                        <td >
                                            <button class="btn btn-primary btn_add"> اضافة </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7 mt-3 mx-5">
                        <form action="{{route('cart.update',$hall->id)}}" method="Post">
                            @csrf
                            @method('PUT')

                            <h4> بيانات الحجز </h4>
                            <div class="row reservation_main_details bg-light pt-3 px-3">

                                <div class="col-10 col-md-6 col-lg-4 mb-3">
                                    <label for="title" class="form-label"> عنوان الحجز </label>
                                    <input type="text" name="title" class="form-control" value="{{$cartItem['title']}}" id="title" placeholder=" عنوان الحجز ">
                                    @error('title')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-10 col-md-6 col-lg-4 mb-3">
                                    <label for="interval">الفترة</label>
                                    <select class="form-control" id="interval" name="interval">
                                        <option selected disabled >--اختار الفترة--</option>
                                        <option value="صباح" {{$cartItem['interval'] == 'صباح' ? 'selected' : ''}}>صباح</option>
                                        <option value="مساء" {{$cartItem['interval'] == 'مساء' ? 'selected' : ''}}>مساء</option>
                                    </select>
                                </div>

                                <div class="col-10 col-md-6 col-lg-4 mb-3">
                                    <label for="type_of_event">نوع الحجز</label>
                                    <select class="form-control" id="type_of_event" name="type_of_event">
                                        <option disabled>--اختار نوع الحدث--</option>
                                        <option value="مؤتمر" {{ $cartItem['type_of_event'] == 'مؤتمر' ? 'selected' : '' }}>مؤتمر</option>
                                        <option value="ندوة" {{ $cartItem['type_of_event'] == 'ندوة' ? 'selected' : '' }}>ندوة</option>
                                        <option value="ورشة عمل" {{ $cartItem['type_of_event'] == 'ورشة عمل' ? 'selected' : '' }}>ورشة عمل</option>
                                        <option value="تدريب" {{ $cartItem['type_of_event'] == 'تدريب' ? 'selected' : '' }}>تدريب</option>
                                    </select>
                                </div>

                                <div class="col-10 col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="date_from" class="form-label">  من تاريخ </label>
                                        <input type="date" name="date_from" class="form-control" value="{{ old('date_from', $cartItem['date_from'])}}" min={{date('Y-m-d')}} id="date_from" >
                                        @error('date_from')
                                            <div class="text-danger fs-6">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-10 col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="date_to" class="form-label">  الى تاريخ </label>
                                        <input type="date" name="date_to" class="form-control" value="{{ old('date_to', $cartItem['date_to'])}}"  id="date_to" >
                                        @error('date_to')
                                            <div class="text-danger fs-6">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-10 col-md-6 col-lg-4 mb-3">
                                        <label for="note" class="form-label">  تفاصيل اخرى </label>
                                        <input type="text" name="note" class="form-control" value="{{old('note')}}" id="note" placeholder="  تفاصيل اخرى ">
                                        @error('note')
                                            <div class="text-danger fs-6">{{ $message }}</div>
                                        @enderror
                                    </div>
                            </div>

                            <h4 class="text-center mt-5"> الخدمات المضافة للقاعة </h4>
                            <table class="table" id="table_pill">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">اسم الخدمة</th>
                                    <th scope="col" class="w_6rem">السعر</th>
                                    <th scope="col" class="w_6rem">الكمية</th>
                                    <th scope="col" class="w_6rem"> الاجمالي </th>
                                    <th scope="col" class="w_6rem"> الاجراء </th>
                                  </tr>
                                </thead>
                                <tbody id="hall_with_services">
                                    <tr>
                                        <td scope="col">1</td>
                                        <td >
                                            {{$hall->name}}
                                            <input type="hidden" name="hall_id" value="{{$hall->id}}">
                                        </td>
                                        <td >{{$hall->price}}</td>
                                        <td >1</td>
                                        <td >{{$hall->price}}</td>
                                        <td ></td>
                                    </tr>
                                    @php
                                        $total = $hall->price;
                                    @endphp
                                    @if (isset($services))
                                        @foreach ($cartItem['services_ids'] as $index => $serviceId)
                                        <tr>
                                            <td scope="col">1</td>
                                            <td >
                                                {{$services[$index]->name}}
                                                <input type="hidden" name="services_ids[]" value="{{$services[$index]->id}}">
                                            </td>
                                            <td ><input type="text" class="border-0 w_6rem" name="price[]" value="{{$cartItem['price'][$index]}}" /></td>
                                            <td ><input type="number" class="w_6rem" name="quantity[]" value="{{$cartItem['quantity'][$index]}}" min="1" /></td>
                                            <td ><input type="text" class="border-0 w_6rem" name="totalOfService[]" value="{{$cartItem['price'][$index] * $cartItem['quantity'][$index]}}" /></td>
                                            <td> <p class=" btn_cancel" style="cursor: pointer;"> الغاء </p> </td>
                                        </tr>
                                        @php
                                            $total += $cartItem['price'][$index] * $cartItem['quantity'][$index];
                                        @endphp
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">الاجمالي</td>
                                        <td colspan="3" id="total_of_services" class="text-center">{{$total}} </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div>
                                <button type="submit" class="btn btn-success"> حفظ التغيير </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>


@push('scripts')
    <script>
        $( document ).ready(function() {
            console.log( "document loaded" );

            let btn_add = $('.btn_add');
            let btn_cancel = $('.btn_cancel');
            let total = $('#total_of_services');
            let i = 2;


            btn_add.click(function() {
                // Get the clicked row
                let row = $(this).closest('tr');

                // Retrieve the required data from the row
                let serviceName = row.find('td:nth-child(2)').text();
                let serviceId = parseInt(row.find('input[name="service_id[]"]').val());
                let quantity = row.find('td:nth-child(3)').text();
                let price = row.find('td:nth-child(4)').text();
                // let total = row.find('.total_service_price').text();
                let _total = parseInt(quantity * price);

                // Create a new row in the #hall_with_services table
                let newRow = $('<tr></tr>');
                newRow.append('<th scope="row">'+ i +'</th>');
                newRow.append(`<td >${serviceName}<input type="hidden" name="services_ids[]" value="${serviceId}"></td>`);
                newRow.append(`<td > <input type="text" class="border-0 w_6rem" name="price[]" value="${price}" /> </td>`);
                newRow.append(`<td > <input type="number" class="w_6rem" name="quantity[]" value="1" min="1" /> </td>`);
                newRow.append(`<td> <input type="text" class="border-0 w_6rem" name="totalOfService[]" value="${_total}" /> </td>`);
                newRow.append('<td> <p class=" btn_cancel" style="cursor: pointer;"> الغاء </p> </td>');

                // Append the new row to the #hall_with_services table
                $('#hall_with_services').append(newRow);

                i++;

                total.text(parseInt(total.text())+_total);
                console.log(+total.text());

                btn_cancel = $('.btn_cancel');

            });


             // Delegate the event handler to the dynamically added .btn_cancel buttons
            $('#hall_with_services').on('click', '.btn_cancel', function() {

                // Get the clicked row
              console.log('in cancel function');
              let row = $(this).closest('tr');

              let serviceName = row.find('input[name="services_ids[]"]').val();
              let quantity = parseInt(row.find('input[name="quantity[]"]').val());
              let price = parseFloat(row.find('input[name="price[]"]').val());
              let _total = price * quantity;

              console.log('==========');
              console.log(quantity);
              console.log(price);
              console.log(_total);
              console.log('==========');

              row.remove();

              i--;

              total.text(parseInt(total.text()) - _total);
              console.log(+total.text());
            });


        });

    </script>
@endpush
@endsection
