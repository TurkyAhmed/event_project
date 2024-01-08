@extends('reservations.reports')
@section('filtered_reservations')


        @foreach ($reservationas as $reservation)
        <tr>
            <td>{{ $reservation->title }}</td>
            <td>{{ $reservation->interval }}</td>
            <td>{{ $reservation->status }}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection
