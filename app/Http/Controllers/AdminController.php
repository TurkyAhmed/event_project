<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function dashboardindex(){

        $reservationStatusCounts = Reservation::select('status', DB::raw('COUNT(*) as count'))
        ->groupBy('status')
        ->pluck('count', 'status')
        ->mapWithKeys(function ($count, $status) {
            return [strval($status) => $count];
        })
        ->toArray();

        // $reservationStatusCounts = DB::select('
        //     select status ,count(*) as count from reservations group by status;
        // ');



        // Prepare the chart data
        $labels = ['في الانتظار','تمت الموافقة','تم الغاء الحجز','تأخير الحجز'];
        $data = [
            $reservationStatusCounts['في الانتظار'] ?? 0,
            $reservationStatusCounts['تمت الموافقة'] ?? 0,
            $reservationStatusCounts['تم الغاء الحجز'] ?? 0,
            $reservationStatusCounts[ 'تأخير الحجز'] ?? 0,
        ];

        // return $data;
        return view('dashboard.dashboard',compact('labels','data'));

    }

}
