<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Enums\ReservationStatus;
use App\Mail\Mail as sendMail;
use App\Models\Hall;
use App\Models\Reservation_Detail;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    // All Waiting Reservation Order
    public function reservation_waiting(){
        $reservations = DB::table('reservations')
                        ->where('status','في الانتظار')
                        ->get();

        return view('reservations.reservation_waiting',compact('reservations'));
    }


    // Approved a waiting resrvating
    public function reservationApproved($id){
        $reservation = Reservation::findorfail($id);

        $user = User::find($reservation->user_id);

        ////////////////////////////////////////////////////////////
        // send email for organizer to accept reservation and waiting for pay half balance
        $mailData = [
            'user'=>'مرحبا, '.$user->name,
            'title'=> 'تأكيد الحجز',
            'body'=>' تم قبول حجزك حسب البيانات المرسلة من قِبلك ونرجو من حضرتك دفع عربون والمقدر 30% من قيمة الحجز ليتم حجز الموعد بشكل نهائي , وتكملة باقي المبلغ قبل الموعد بيومين',
            'flag'=>'aprroved',
        ];

        Mail::to('tasg1818@gmail.com')->send(new sendMail($mailData));
        ///////////////////////////////////////////////
        $reservation->update([
            'status'=> ReservationStatus::Approved->value,
            'employee_id'=> 1,
        ]);
        $reservation->save();

        return redirect()->back();
    }

    // cancelled a waiting resrvating
    public function reservationcancelled($id){
        $reservation = Reservation::findorfail($id);
        $reservation->update([
            'status'=> ReservationStatus::Cancel->value,
            'employee_id'=> 1,
        ]);
        $reservation->save();

        return redirect()->back();
    }


    public function create()
    {
        $halls = Hall::all()->where('is_avaliable',true);

        $services = Service::all()
                            ->where('is_avaliable',true)
                            ->where('is_main_service',false);

        return view('reservations.create',compact('halls','services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $status = ReservationStatus::Approved->value;
        // return $status;

        $newReservation = Reservation::create([
            'user_id'=> 5,
            'title'=>$request->title,
            'interval'=> '  evenning ',
            'status'=> ReservationStatus::Wait->value,
            'date_from'=>$request->date_from,
            'date_to'=>$request->date_to,
            'type_of_event'=>$request->type_of_event,
            'note'=>$request->note,
        ]);



        $countOfHalls = count($request->hall_id);

        for($i=0; $i<$countOfHalls; $i++){
            $services='service'.$i.'_id';
            for($j=0; $j < count($request->$services); $j++){

                $reservation_datails =new Reservation_Detail([
                    'reservation_id' => $newReservation->id,
                    'hall_id'=>$request->hall_id[$i],
                    'service_id'=> $request->$services[$j],
                ]);

                $newReservation->reservation_detail()->save($reservation_datails);
            }
        }

        return ' تم الحجز بنجاح ';
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
