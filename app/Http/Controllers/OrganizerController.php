<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizerController extends Controller
{
    public function report(){
        $halls = Hall::all()->where('is_avaliable', 1);

        return view('organizers.report',compact('halls'));
    }

    public function reportReservationFiltered(Request $request){
        $hallId = $request->input('hall_id');
        $dateFrom = $request->input('date_from');
        $dateTo = $request->input('date_to');

        $filteredReservations = DB::table('reservations')
                                ->join('reservation__details','reservations.id','reservation_id')
                                ->join('halls','halls.id','hall_id')
                                ->join('services','services.id','service_id')
                                ->where('hall_id', $hallId)
                                ->where('date_from', '>=', $dateFrom)
                                ->where('date_to', '<=', $dateTo)
                                ->select('reservations.*')
                                ->distinct()
                                ->get();

        return response()->json(['filteredReservations'=>$filteredReservations]);
    }



    public function previousReservations(){
        $halls = Hall::all()->where('is_avaliable', 1);

        return view('organizers.previous_reservations', compact('halls'));
    }

    public function previousReservationsFiltered(Request $request){
        $hallId = $request->input('hall_id');
        $dateFrom = $request->input('date_from');
        $dateTo = $request->input('date_to');

        $filteredReservations = DB::table('reservations')
                                ->join('reservation__details','reservations.id','reservation_id')
                                ->join('halls','halls.id','hall_id')
                                ->join('services','services.id','service_id')
                                ->where('hall_id', $hallId)
                                ->where('date_from', '>=', $dateFrom)
                                ->where('date_to', '<=', $dateTo)
                                ->select('reservations.*')
                                ->distinct()
                                ->get();

        return response()->json(['filteredReservations'=>$filteredReservations]);
    }



    public function futureReservations(){
        $halls = Hall::all()->where('is_avaliable', 1);

        return view('organizers.previous_reservations', compact('halls'));
    }

    public function futureReservationsFiltered(Request $request){
        $hallId = $request->input('hall_id');
        $dateFrom = $request->input('date_from');
        $dateTo = $request->input('date_to');

        $filteredReservations = DB::table('reservations')
                                ->join('reservation__details','reservations.id','reservation_id')
                                ->join('halls','halls.id','hall_id')
                                ->join('services','services.id','service_id')
                                ->where('hall_id', $hallId)
                                ->where('date_from', '>=', $dateFrom)
                                ->where('date_to', '<=', $dateTo)
                                ->select('reservations.*')
                                ->distinct()
                                ->get();

        return response()->json(['filteredReservations'=>$filteredReservations]);
    }
}
