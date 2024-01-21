@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')

    <div class="container-fluid mt-5">
        <div class="row ">
            <div class="col-12 col-md-3 bg-light position-fixed h_100vh pt-5">

                <div class="mb-3">
                    <select class="form-select" id="hall" name="hall_id">
                        <option selected disabled >--اختار القاعة--</option>
                        @foreach ($halls as $hall )
                            <option value="{{$hall->id}}" >{{$hall->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="date_from" class="form-label">  من تاريخ </label>
                    <input type="date" name="date_from" class="form-control" value="{{ date('Y-m-d') }}" id="date_from" >
                    @error('date_from')
                        <div class="text-danger fs-6">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date_to" class="form-label">  الى تاريخ </label>
                    <input type="date" name="date_to" class="form-control" value="{{ date('Y-m-d') }}" id="date_to" >
                    @error('date_to')
                        <div class="text-danger fs-6">{{ $message }}</div>
                    @enderror
                </div>


            </div>

            <div class="col-12 col-lg-9 mt-5 absolute_left_0">
                <div class="container">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>العنوان</th>
                                <th>الفترة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody  id="reservations_filtered">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            function updateReservations() {

                let hallId = $('#hall').val();
                let dateFrom = $('#date_from').val();
                let dateTo = $('#date_to').val();

                console.log(`hall -> ${hallId} , and date_from -> ${dateFrom} , and date_to -> ${dateTo}`);

                $.ajax({
                    type: 'GET',
                    url: '/users/filter',
                    data: {
                        hall_id: hallId,
                        date_from: dateFrom,
                        date_to: dateTo
                    },
                    success: function(response) {
                        console.log(response.filteredReservations);

                        $('#reservations_filtered').html('');
                        response.filteredReservations.forEach(filteredReservation => {
                              $('#reservations_filtered').append(`
                            <tr>
                                <td> ${filteredReservation.title }</td>
                                <td> ${filteredReservation.interval}</td>
                                <td> ${filteredReservation.status }</td>
                            </tr>`
                            );
                        });


                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        console.error(error);
                    }
                });
            }

            $('#hall, #date_from, #date_to').on('change', function() {
                console.log('change');
                updateReservations();
            });
        });
    </script>
@endsection
