@extends('layouts.main_layout')
@section('content')
    <div class="reservation h_70vh">
        <div class="container " style="margin-top: 12rem;">
            <div class="halls">
                <div class="container-fluid">

                    <div class="row bg-light px-5 py-3">
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <label for="interval">الفترة</label>
                            <select class="form-control" id="interval" name="interval">
                                <option selected disabled >--اختار الفترة--</option>
                                <option value="صباح" >صباح</option>
                                <option value="مساء" >مساء</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <label for="date_from" class="form-label">  من تاريخ </label>
                            <input type="date" name="date_from" class="form-control" value="{{ date('Y-m-d') }}" id="date_from" >
                        </div>
                        <div class="col-10 col-md-4 mb-3">
                            <label for="date_to" class="form-label">  الى تاريخ </label>
                            <input type="date" name="date_to" class="form-control" value="{{ date('Y-m-d') }}" id="date_to" >
                        </div>
                    </div>

                    <div class="container-fluid">
                        <h3 class="mt-4 mb-3 text_primary">القاعات المتاحة في الفترة المحددة :</h3>
                        <div class="row " id="containerOfHallsAvaliable">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

    <script>
        $(document).ready(function() {
            console.log('page loaded');

            function updateReservations() {

                console.log('in function')

                let interval = $('#interval').val();
                let dateFrom = $('#date_from').val();
                let dateTo = $('#date_to').val();

                console.log(`interval -> ${interval} , and date_from -> ${dateFrom} , and date_to -> ${dateTo}`);

                $.ajax({
                    type: 'GET',
                    url: '/reservations/hallsavaliablebydate',
                    data: {
                        _interval: interval,
                        date_from: dateFrom,
                        date_to: dateTo
                    },
                    success: function(response) {
                        console.log(response.hallsFiltered);

                        $('#containerOfHallsAvaliable').html('');
                        response.hallsFiltered.forEach(hallsFiltered => {
                              $('#containerOfHallsAvaliable').append(`

                                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                                    <div class="reservation__hall__item set-bg gray_scal" data-setbg="hr-${hallsFiltered.id }.jpg">
                                        <div class="reservation__hall__title">
                                            <h4>  ${hallsFiltered.name }</h4>
                                            <h2 class="text_primary"><sup>$</sup> ${hallsFiltered.price - hallsFiltered.discount}<span class="text-white">/للحجز الواحد</span></h2>
                                        </div>
                                        <a href="/reservations/reservation_details/${hallsFiltered.id}">احجز الان</a>
                                    </div>
                                </div>
                         `
                            );
                        });


                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        console.error(error);
                    }
                });
            }

            $('#interval, #date_from, #date_to').on('change', function() {
                console.log('change');
                updateReservations();
            });
        });
    </script>

    @endpush
@endsection
