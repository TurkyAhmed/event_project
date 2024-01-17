
@extends('layouts.main_layout_dashboard')
     @section('dashboaed-content')


     <div class="dashboard-top h_7rem">
        <h3 class=" pt-5 pe-5 text-white"> التقارير  </h3>
    </div>

    <div class="container pt-5 pe-5">

        <div class="reservation_filter bg-light px-4 py-3">
        <div class="row">
            <div class="col-10 col-md-4">
                <div class="mb-3">
                    <label for="interval">القاعة</label>
                    <select class="form-control" id="hall" name="hall_id">
                        <option selected disabled >--اختار القاعة--</option>
                        @foreach ($halls as $hall )
                            <option value="{{$hall->id}}" >{{$hall->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-10 col-md-4">
                <div class="mb-3">
                    <label for="date_from" class="form-label">  من تاريخ </label>
                    <input type="date" name="date_from" class="form-control" value="{{ date('Y-m-d') }}" id="date_from" >
                    @error('date_from')
                        <div class="text-danger fs-6">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-10 col-md-4">
                <div class="mb-3">
                    <label for="date_to" class="form-label">  الى تاريخ </label>
                    <input type="date" name="date_to" class="form-control" value="{{ date('Y-m-d') }}" id="date_to" >
                    @error('date_to')
                        <div class="text-danger fs-6">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        </div>

        <table class="table container">
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


    <script>
        $(document).ready(function() {
            console.log('page loaded');

            function updateReservations() {

                console.log('in function')

                let hallId = $('#hall').val();
                let dateFrom = $('#date_from').val();
                let dateTo = $('#date_to').val();

                console.log(`hall -> ${hallId} , and date_from -> ${dateFrom} , and date_to -> ${dateTo}`);

                $.ajax({
                    type: 'GET',
                    url: '/reservations/filter',
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
                                <td> ${filteredReservation.interval == "morning"? "صباح" : "مساء"}</td>
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


