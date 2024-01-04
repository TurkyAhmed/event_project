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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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




}
