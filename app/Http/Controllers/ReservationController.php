<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Enums\ReservationStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('reservations.index',compact('reservations'));
    }

    public function reservation_waiting(){
        $reservations = DB::table('reservations')
                        ->where('status','في الانتظار')
                        ->get();

        return view('reservations.reservation_waiting',compact('reservations'));
    }


    public function reservationApproved($id){
        $reservation = Reservation::findorfail($id);

        $reservation->update([
            'status'=> 'تمت الموافقة'
        ]);
        $reservation->save();

        return redirect()->back();
    }


    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $arr =$request;
    //     $arr =ReservationStatus::Approved;;
    //    return $arr ;

    $status = ReservationStatus::Approved->value;
    return $status;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function delete(string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }


public function getCalender(){
    $reservations_ =  [
        [
        'title'=> 'Call with Dave',
        'start'=> '2020-11-18',
        'end'=> '2020-11-18',
        'className'=> 'bg-gradient-danger'
        ],

      [
        'title'=> 'Lunch meeting',
        'start'=> '2020-11-21',
        'end'=> '2020-11-22',
        'className'=> 'bg-gradient-warning'
      ],

      [
        'title'=> 'All day conference',
        'start'=> '2020-11-29',
        'end'=> '2020-11-29',
        'className'=> 'bg-gradient-success'
      ],

      [
        'title'=> 'Meeting with Mary',
        'start'=> '2020-12-01',
        'end'=> '2020-12-01',
        'className'=> 'bg-gradient-info'
      ],

      [
        'title'=> 'Winter Hackaton',
        'start'=> '2020-12-03',
        'end'=> '2020-12-03',
        'className'=> 'bg-gradient-danger'
      ],

      [
        'title'=> 'Digital event',
        'start'=> '2020-12-07',
        'end'=> '2020-12-09',
        'className'=> 'bg-gradient-warning'
      ],

      [
        'title'=> 'Marketing event',
        'start'=> '2020-12-10',
        'end'=> '2020-12-10',
        'className'=> 'bg-gradient-primary'
      ],

      [
        'title'=> 'Dinner with Family',
        'start'=> '2020-12-19',
        'end'=> '2020-12-19',
        'className'=> 'bg-gradient-danger'
      ],

      [
        'title'=> 'Black Friday',
        'start'=> '2020-12-23',
        'end'=> '2020-12-23',
        'className'=> 'bg-gradient-info'
      ],

      [
        'title'=> 'Cyber Week',
        'start'=> '2020-12-02',
        'end'=> '2020-12-02',
        'className'=> 'bg-gradient-warning'
      ],
      [
        'title'=> 'TR17',
        'start'=> '2024-01-03 19:43:35',
        'end'=> '2024-01-08 19:43:35',
        'className'=> 'bg-gradient-danger'
      ],

    ];

    $booking = Reservation::all();

    $reservations = array();

    foreach($booking as $book){
        $reservations[]= [
            'title'=> $book->title,
            'start'=> $book->date_from,
            'end'=> $book->date_to,
            'className'=> 'bg-gradient-danger'
        ];
    }


    // return $reservations;
    return view('reservations.calender',compact('reservations'));
}

}
