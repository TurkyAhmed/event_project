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
                    <div class="col-12 col-lg-4 bg-light ">
                        <div class="container">
                            <h3 class="text-center"> الخدمات المتوفره </h3>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">اسم الخدمة</th>
                                    <th scope="col">الكمية</th>
                                    <th scope="col">سعر الواحد</th>
                                    {{-- <th scope="col"> الاجمالي </th> --}}
                                    <th scope="col"> الاجراءات </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                    <tr >
                                        <th  scope="row">1</th>
                                        <td >{{$service->name}}<input type="hidden" name="service_id[]" value="{{$service->id}}"></td>
                                        <td >1 </td>
                                        <td > {{$service->price}}</td>
                                        {{-- <td class="text-center total_service_price"></td> --}}
                                        <td >
                                            <button class="btn btn-primary btn_add"> اضافة </button>
                                            {{-- <button class="btn btn-secondary btn_cancel"> الغاء </button> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7 mt-3 mx-5">
                        <form action="{{route('cart.addToCart')}}" method="Post">
                            @csrf

                            <h4> بيانات الحجز </h4>
                            <div class="row reservation_main_details bg-light pt-3 px-3">

                                <div class="col-10 col-md-6 col-lg-4 mb-3">
                                    <label for="title" class="form-label"> عنوان الحجز </label>
                                    <input type="text" name="title" class="form-control" value="{{old('title')}}" id="title" placeholder=" عنوان الحجز ">
                                    @error('title')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-10 col-md-6 col-lg-4 mb-3">
                                    <label for="interval">الفترة</label>
                                    <select class="form-control" id="interval" name="interval">
                                        <option selected disabled >--اختار الفترة--</option>
                                        <option value="صباح">صباح</option>
                                        <option value="مساء">مساء</option>
                                    </select>
                                </div>

                                <div class="col-10 col-md-6 col-lg-4 mb-3">
                                    <label for="type_of_event">نوع الحجز</label>
                                    <select class="form-control" id="type_of_event" name="type_of_event">
                                        <option selected disabled >--اختار نوع الحدث--</option>
                                        <option value="مؤتمر">مؤتمر</option>
                                        <option value="ندوة"> ندوة </option>
                                        <option value="ورشة عمل">ورشة عمل</option>
                                        <option value="تدريب"> تدريب </option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <label for="date_from" class="form-label">  من تاريخ </label>
                                    <input type="date" name="date_from" class="form-control" value="{{ old('date_from', date('Y-m-d'))}}" id="date_from" >
                                    @error('date_from')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>

                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                            <label for="date_to" class="form-label">  الى تاريخ </label>
                                            <input type="date" name="date_to" class="form-control" value="{{ old('date_to', date('Y-m-d'))}}"  id="date_to" >
                                            @error('date_to')
                                                <div class="text-danger fs-6">{{ $message }}</div>
                                            @enderror
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
                                        <td >{{$hall->price - $hall->discount}}</td>
                                        <td >1</td>
                                        <td >{{$hall->price - $hall->discount}}</td>
                                        <td ></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">الاجمالي</td>
                                        <td colspan="3" id="total_of_services" class="text-center">{{$hall->price}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div>
                                <button type="submit" class="btn btn-success">إضافة إلى العربة</button>
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
                newRow.append(`<td >${serviceName}<input type="hidden" name="service_id[]" value="${serviceId}"></td>`);
                newRow.append(`<td > <input type="text" class="border-0 w_6rem" name="price[]" value="${price}" /> </td>`);


                let td =document.createElement('td');


                let _input =document.createElement('input');
                _input.name="quantity[]";
                _input.classList ="w_6rem";
                _input.type='number';
                _input.value='1';

                _input.addEventListener('input',()=>{
                    totalOfService.value=_input.value * price ;

                    total.text(parseInt(total.text()) + parseInt(totalOfService.value) -price);
                });



                let totalOfService =document.createElement('input');
                totalOfService.name="totalOfService[]";
                totalOfService.classList ="w_6rem border-0";
                totalOfService.type='number';
                totalOfService.value=_total;



                td.appendChild(_input);
                newRow.append(td);


                td =document.createElement('td');
                td.appendChild(totalOfService);
                newRow.append(td);

                console.log(typeof(parseInt(total.text())));
                console.log(typeof(+totalOfService.value));

                newRow.append('<td> <p class=" btn_cancel" style="cursor: pointer;"> الغاء </p> </td>');

                // Append the new row to the #hall_with_services table
                $('#hall_with_services').append(newRow);

                i++;

                total.text(parseInt(total.text())+_total);
                // console.log(+total.text());

                btn_cancel = $('.btn_cancel');

            });


             // Delegate the event handler to the dynamically added .btn_cancel buttons
            $('#hall_with_services').on('click', '.btn_cancel', function() {

                // Get the clicked row
              console.log('in cancel function');
              let row = $(this).closest('tr');

              let serviceName = row.find('input[name="service_name[]"]').val();
              let quantity = parseInt(row.find('input[name="quantity[]"]').val());
            //   let quantity = parseInt(row.find('td:nth-child(3)').text());
              let price = parseFloat(row.find('input[name="price[]"]').val());
              let _total = price * quantity;

              console.log('==========');
              console.log(quantity);
              console.log(price);
              console.log(_total);
              console.log('==========');

            //   let pillTable = $('#hall_with_services');
            //   console.log(pillTable);
            //   let pillTableRow = pillTable.find('td:contains("' + serviceName + '")').closest('tr');
            //   pillTableRow.remove();

            row.remove();

              i--;

              total.text(parseInt(total.text()) - _total);
              console.log(+total.text());
            });


        });



        $( window ).on( "load", function() {
            console.log( "window loaded" );
        });
    </script>
@endpush
@endsection
