<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Enums\ReservationStatus;
use App\Mail\Mail as sendMail;
use App\Models\Employee;
use App\Models\Hall;
use App\Models\Reservation_Detail;
use App\Models\Service;
use App\Models\User;
use App\Notifications\reservations_notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{

    private $imgs =[
        '1'=>['sada1.jpg','sada2.jpg','sada3.jpg','sada4.jpg'], //2 hagrain 6shabam
        '2'=>['istdama1.jpg','istdama2.jpg','istdama3.jpg'],
        '3'=>['istdama1.jpg','istdama2.jpg','istdama3.jpg'],
        '4'=>['con1.jpg','con2.jpg','con3.jpg'],
        '5'=>['salam1.jpg','salam2.jpg','salam3.jpg','salam4.jpg'],
        '6'=>['aon1.jpg','aon2.jpg','aon3.jpg',],
        '7'=>['aon1.jpg','aon2.jpg','aon3.jpg',],
    ];


    public function index()
    {
        $reservations = DB::table('reservations')
                        ->join('users','reservations.user_id','users.id')
                        ->where('reservations.deleted_at',null)
                        ->select('reservations.*','users.name as username')
                        ->paginate(10);

        return view('reservations.index',['reservations'=>$reservations ,'link_active'=>'reservations']);

    }


    // All Waiting Reservation Order
    public function reservation_waiting(){
        $reservations = DB::table('reservations')
                        ->join('users','users.id','reservations.user_id')
                        ->where('status','في الانتظار')
                        ->where('deleted_at', null)
                        ->select('reservations.*','users.name as username')
                        ->paginate(10);

        return view('reservations.reservation_waiting',['reservations'=>$reservations ,'link_active'=>'reservations']);
    }


    // Approved a waiting resrvating
    public function reservationApproved($id){
        $reservation = Reservation::findorfail($id);

        $user = User::find($reservation->user_id);
        // $employee = Employee::findOrFail(auth()->user()->id);

        ////////////////////////////////////////////////////////////
        // send email for organizer to accept reservation and waiting for pay half balance
        $mailData = [
            'user'=>'مرحبا, '.$user->name,
            'title'=> 'تأكيد الحجز',
            'body'=>' تم قبول حجزك حسب البيانات المرسلة من قِبلك ونرجو من حضرتك دفع عربون والمقدر 30% من قيمة الحجز ليتم حجز الموعد بشكل نهائي , وتكملة باقي المبلغ قبل الموعد بيومين',
            'flag'=>'aprroved',
        ];

        // Mail::to($user->email)->send(new sendMail($mailData));
        Mail::to('tasg1818@gmail.com')->send(new sendMail($mailData));
        ///////////////////////////////////////////////
        $reservation->update([
            'status'=> ReservationStatus::Approved->value,
            // 'employee_id'=> $employee->id,
            'employee_id'=> 1,
        ]);
        $reservation->save();

        $admin=User::all()->where('role_id', 1);
        Notification::send($admin,new reservations_notification('jj'));

        return redirect()->back()->with('successMsg',' تم تأكيد الحجز بنجاح');
    }

    // cancelled a waiting resrvating
    public function reservationcancelled($id){

        $employee_id = auth()->user()->id;
        // $employee = Employee::findOrFail($employee_id);

        $reservation = Reservation::findorfail($id);
        $reservation->update([
            'status'=> ReservationStatus::Cancel->value,
            // 'employee_id'=> $employee->id,
            'employee_id'=> 1,
        ]);
        $reservation->save();

        return redirect()->back()->with('successMsg','تم الغاء الحجز بنجاح');
    }

    public function create()
    {
        $halls = Hall::all()
                ->where('is_avaliable',true)
                ->where('deleted_at', null);

        return view('reservations.create',compact('halls'));
    }


    public function reservation_details($id){
        $hall = Hall::findOrFail($id);
        $services = DB::table('services')
                    ->where('is_avaliable',1)
                    ->where('is_main_service',0)
                    ->where('deleted_at', null)
                    ->get();

        $imgs = $this->imgs[$hall->id];

        return view("reservations.reservation_details",['hall'=>$hall,'services'=>$services,'imgs'=>$imgs,'link_active'=>'reservations']);
    }



    public function store(Request $request)
    {
        $cart = session()->get('cart', []);
        // return $cart;


        // Iterate over the cart items
        foreach ($cart as $hall_id => $item) {

            $reservation = Reservation::create([
                // 'employee_id' => $employee_id,
                'user_id' => auth()->user()->id,
                'title' => $item['title'],
                'interval' => $item['interval'],
                'status' => 'في الانتظار',
                'date_from' =>  $item['date_from'],
                'date_to' =>  $item['date_to'],
                'type_of_event' => $item['type_of_event'],
                'note' => $item['note'],
            ]);

            $service_ids = $item['services_ids'];
            $prices = $item['price'];
            $quantities = $item['quantity'];
            // $totalOfServices = $item['totalOfService'];

            // Create the reservation details record for each item
            for ($i = 0; $i < count($service_ids); $i++) {
                $service_id = $service_ids[$i];
                $price = $prices[$i];
                $quantity = $quantities[$i];
                // $totalOfService = $totalOfServices[$i];

                $reservation->reservation_detail()->create([
                    'hall_id' => $hall_id,
                    'service_id' => $service_id,
                    'service_count' => $quantity,
                    'service_price' => $price,
                    'note' => null, // Replace with the actual note value if needed
                ]);
            }
        }

        // Clear the cart after storing the data
        session()->forget('cart');

        // return 'تمت الاضافة بنجاح';
        return redirect()->route('cart.index');

    }


    public function show( $id)
    {

        $reservationDetails = DB::select("
            select reservations.*, reservation__details.*,halls.name as hall_name, halls.price as hall_price , services.name as service_name, users.name as username
            from reservations inner join reservation__details
            on reservations.id = reservation__details.reservation_id
            inner join services on services.id = reservation__details.service_id
            inner join halls on halls.id = reservation__details.hall_id
            inner join users on users.id = reservations.user_id
            where reservations.id = $id && reservations.deleted_at is null;
        ");

        // return $reservationDetails ;

        $reservationPrice = DB::select("
            select (subquery.total_price + h.price) as total_price
                from (
                    select sum(rd.service_price * rd.service_count) as total_price
                    from reservation__details rd
                    where rd.reservation_id = $id
                ) as subquery
            join halls h on h.id = (select hall_id from reservation__details where reservation_id = $id limit 1);
        ");

        // return $reservationDetails;

        return view('reservations.details',compact('reservationDetails')) ;
        // return $reservation_details ;
    }


    public function edit( $id)
    {
        $reservationDetails = DB::select("
        select reservations.*, reservation__details.*,halls.id as hall_id,halls.name as hall_name,  halls.price as hall_price , services.name as service_name
        from reservations inner join reservation__details
        on reservations.id = reservation__details.reservation_id
        inner join services on services.id = reservation__details.service_id
        inner join halls on halls.id = reservation__details.hall_id
        where reservations.id = $id && reservation__details.deleted_at is null;
        ");

        $allServices = Service::all()
                        ->where('is_avaliable',true)
                        ->where('is_main_service',false)
                        ->where('deleted_at', null);

        $imgs = $this->imgs[$reservationDetails[0]->hall_id];

        // return $reservationDetails;

        return view('reservations.edit', compact('reservationDetails','allServices','imgs'));
    }


    public function update(Request $request, string $id)
    {
        $reservation = Reservation::findorfail($id);
        $reservation_details = $reservation->reservation_detail;

        // return $reservation_datails;
        // return $reservation_datails[0]->hall_id;

        $reservation->title = $request->input('title');
        $reservation->interval = $request->input('interval');
        // $reservation->status = $request->input('status');
        $reservation->date_from = $request->input('date_from');
        $reservation->date_to = $request->input('date_to');
        $reservation->type_of_event = $request->input('type_of_event');
        $reservation->note = $request->input('note');
        $reservation->save();

        $services_ids = $request->input('services_ids');
        $services_prices = $request->input('price');
        $quantities = $request->input('quantity');

        // to solve diffiernt records between database and request or you can delete past record for this reservation and create new to
        // store in database
        $reservation->reservation_detail()->delete();

        // Create the reservation details record for each item
        for ($i = 0; $i < count($services_ids); $i++) {
            $service_id = $services_ids[$i];
            $price = $services_prices[$i];
            $quantity = $quantities[$i];

            $reservation->reservation_detail()->create([
                'hall_id' => $request->input('hall_id'),
                'service_id' => $service_id,
                'service_count' => $quantity,
                'service_price' => $price,
                'note' => null, // change with the actual note value
            ]);
        }


        return redirect()->route('cart.index')->with('successMsg','تم التعديل بنجاح') ;


    }


    public function delete(string $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index');
    }


    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index');
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

        $booking = Reservation::all()
                ->where('deleted_at',null);

        $reservations = array();

        foreach($booking as $book){
            $reservations[]= [
                'title'=> $book->title,
                'start'=> $book->date_from,
                'end'=> $book->date_to,
                'className'=> $book->status->background(),
            ];
         }


    // return $reservations;
    return view('reservations.calender',['reservations'=>$reservations,'link_active'=>'calender']);
}


public function report(){
    $halls = Hall::all();
    return view('reservations.reports',compact('halls'));
}


public function filterReservations(Request $request){

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





    // $filteredReservations = DB::select('
    //     SELECT * FROM reservations
    //     inner join reservation__details on reservations.id = reservation_id
    //     inner join halls on halls.id = hall_id
    //     inner join services on services.id = service_id
    //     ;
    // ');




    return response()->json(['filteredReservations'=>$filteredReservations]);
}


public function myReservations(){
    $halls = Hall::all()->where('is_avaliable', 1);
    return view('reservations.myreservaions', compact('halls'));
}

public function myreservationsfiltered(Request $request){
    return $request ;
}







// == archive =======================================================

public function _store(Request $request)
{
    // $status = ReservationStatus::Approved->value;
    // return $status;

    // return auth()->user();

    $newReservation = Reservation::create([
        // 'user_id'=> auth()->user()->id,
        'user_id'=> 5,
        'employee_id'=>null,
        'title'=>$request->title,
        'interval'=>$request->interval,
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
                'service_count'=> 1, //TODO edit
                'service_price'=> 10, //TODO edit
            ]);

            $newReservation->reservation_detail()->save($reservation_datails);
        }
    }

    return redirect()->route('reservations.index');
}

}
