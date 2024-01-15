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

        $hallsCount = DB::table('halls')->count();
        $servicesCount =DB::table('services')->count();
        $reservationsWaitingCount = DB::table('reservations')
                                ->where('status','في الانتظار')
                                ->where('deleted_at', null)
                                ->count();

        $reservationsCancelled = DB::table('reservations')
                                ->where('status','تم الغاء الحجز')
                                ->where('deleted_at', null)
                                ->count();

        $reservationsweekly = DB::table('reservations')
                                ->where('status', 'تمت الموافقة')
                                ->where('date_from', '>', today())
                                ->where('date_from', '<', today()->addDays(7))
                                ->count();

        $usersCount = DB::table('users')
                    ->leftJoin('employees','users.id','employees.user_id')
                    ->where('employees.user_id',Null)
                    ->count();

        $reservationsWaiting = DB::table('reservations')
                    ->where('status','في الانتظار')
                    ->where('deleted_at', null)
                    ->paginate(5);


        // on view call as this [as array] that mean => $viewData['hallsCount'],$viewData['servicesCount']
        $viewData['hallsCount'] = $hallsCount;
        $viewData['servicesCount'] = $servicesCount;
        $viewData['reservationsWaitingCount'] = $reservationsWaitingCount;
        $viewData['reservationsCancelled'] = $reservationsCancelled;
        $viewData['reservationsweekly'] = $reservationsweekly;
        $viewData['usersCount'] = $usersCount;

        // return $data;
        return view('dashboard.dashboard',compact('labels','data','viewData','reservationsWaiting','hallsCount'));

    }

}
