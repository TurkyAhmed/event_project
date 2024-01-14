@extends('layouts.main_layout')
@section('content')

    <div class="reservation_details h_100vh">
        <div id="reservation_details" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#reservation_details" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#reservation_details" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#reservation_details" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/imgs/istdama.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/imgs/istdama.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/imgs/istdama.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#reservation_details" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reservation_details" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section class="reservation_details_services my-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-5 bg-light">
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

                    <div class="col-12 col-lg-7 mt-3">
                        <form action="{{route('cart.update',$hall->id)}}" method="Post">
                            @csrf
                            @method('PUT')

                            <h4>فترة الحجز</h4>
                            <div class="row">
                                <div class="col-10 col-md-6 col-lg-4">
                                    <div class="mb-3">
                                        <label for="date_from" class="form-label">  من تاريخ </label>
                                        <input type="date" name="date_from" class="form-control" value="{{ old('date_from', $cartItem['date_from'])}}" id="date_from" >
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
    </div>


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
