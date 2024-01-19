@extends('layouts.main_layout')
@section('content')
@push('style')
<style>
    .navbar{
        background-image: linear-gradient(60deg, rgba(126,160,183,1) 0%, rgba(9, 87, 121, 0.704) 38%, rgba(89, 130, 142, 0.808) 100%);
    }
    .h_70vh{
        min-height: 70vh
    }
    .row.bg-light{
        margin-top: 5rem
    }
</style>
@endpush

    <div class="container h_70vh">

            <div class="row bg-light pt-5 pb-3 mb-3 px-5">
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <label for="hall" class="form-label"> القاعة </label>
                    <select class="form-select" id="hall" name="hall_id">
                        <option selected disabled >--اختار القاعة--</option>
                        @foreach ($halls as $hall )
                            <option value="{{$hall->id}}" >{{$hall->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <label for="date_from" class="form-label">  من تاريخ </label>
                        <input type="date" name="date_from" class="form-control" value="{{ date('Y-m-d') }}" id="date_from">
                        @error('date_from')
                            <div class="text-danger fs-6">{{ $message }}</div>
                        @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <label for="date_to" class="form-label">  الى تاريخ </label>
                        <input type="date" name="date_to" class="form-control" value="{{ date('Y-m-d') }}" id="date_to" >
                        @error('date_to')
                            <div class="text-danger fs-6">{{ $message }}</div>
                        @enderror
                </div>
            </div>


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

@push('scripts')
<script>
    $(document).ready(function() {

        function updateReservations() {

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
@endpush
@endsection
