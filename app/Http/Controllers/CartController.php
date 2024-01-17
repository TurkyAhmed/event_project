<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
        private static $total = 0;

    public function addToCart(Request $request){
        $hall_id = $request->hall_id;
        // return $request;

        $hall = Hall::find($hall_id);

        // Retrieve the cart data from the session
        $cart = session()->get('cart', []);

        if (isset($cart[$hall_id])) {
            // Increment the quantity if the service is already in the cart
            // $cart[$hall_id]['quantity'] += $quantity;
            //TODO if sesstion exsit
        } else {
            // Add the service to the cart with the specified quantity
            $cart[$hall_id] = [
                'title'=>$request->title,
                'interval'=>$request->interval,
                'type_of_event'=>$request->type_of_event,
                'note'=>$request->note,
                'date_from'=>$request->date_from,
                'date_to'=>$request->date_to,
                'services_ids' => $request->service_id,
                'price' => $request->price,
                'quantity'=>$request->quantity
            ];

            $totalPrice = $hall->price;

            if(isset($cart[$hall_id]['services_ids'])){
                for($i=0 ; $i<count($cart[$hall_id]['services_ids']); $i++) {
                    $totalPrice +=$cart[$hall_id]['quantity'][$i]*$cart[$hall_id]['price'][$i];
                }
            }

            $cart[$hall_id] +=['totalPrice'=>$totalPrice];
        }


        session()->put('cart',$cart);

        $_cart= session()->get('cart', []);


        return redirect()->route('cart.index');
    }


    public function index(){

        $cart = session()->get('cart', []);

        $halls_ids=array();
        foreach ($cart as $itemId => $itemData) {
            $halls_ids[]= $itemId;
        }

        $halls = Hall::whereIn('id',$halls_ids)->get();

        return view('cart.index' , compact('halls','cart'));
    }



    public function show($id){
        $cart = session()->get('cart', []);
        $hall = Hall::find($id);

        $cartItem = $cart[$id];

        $services_ids = $cartItem['services_ids'];

        if(isset($services_ids)){
            $services = Service::whereIn('id',$services_ids)->get();
        }else{
            $services = null;
        }

        // return $cartItem;

        return view('cart.details',compact('hall','cartItem','services'));
    }

    public function edit($id){
        $cart = session()->get('cart', []);

        // return $cart;

        $hall = Hall::find($id);
        $allsevices = DB::table('services')
                        ->where('is_avaliable',1)
                        ->where('is_main_service',0)
                        ->where('deleted_at', null)
                        ->get();

        $cartItem = $cart[$id];

        $services_ids = $cartItem['services_ids'];
        if(isset($services_ids)){
            $services = Service::whereIn('id',$services_ids)->get();
        }else{
            $services = null;
        }

        return view('cart.edit',compact('hall','cartItem','services','allsevices'));
    }


    public function update(Request $request ,$id){

        return $request;
        $hallId = $request->hall_id;
        $hall = Hall::findOrFail($hallId );
        $cart = session()->get('cart', []);

        if (isset($cart[$hallId])) {
            // Update the relevant values in the cart item
            $cart[$hallId]['title'] = $request->title;
            $cart[$hallId]['interval'] = $request->interval;
            $cart[$hallId]['type_of_event'] = $request->type_of_event;
            $cart[$hallId]['note'] = $request->note;
            $cart[$hallId]['date_from'] = $request->date_from;
            $cart[$hallId]['date_to'] = $request->date_to;
            $cart[$hallId]['price'] = $request->price;
            $cart[$hallId]['quantity'] = $request->quantity;
            // $cart[$hallId]['totalOfService'] = $request->totalOfService;
            $cart[$hallId]['services_ids'] = $request->services_ids;

            $totalPrice = $hall->price;

            if(isset($cart[$hallId]['services_ids'])){
                for($i=0 ; $i<count($cart[$hallId]['services_ids']); $i++) {
                    $totalPrice +=$cart[$hallId]['quantity'][$i]*$cart[$hallId]['price'][$i];
                }
            }

            $cart[$hallId]['totalPrice']= $totalPrice;
            session()->put('cart', $cart);
        } else {
            //TODO error if not found throw exciption

        }

        return redirect()->route('cart.index') ;
    }


    public function cancelSpecificreservation($id){
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        } else {
           //TODO error if not found throw exciption
        }

        return redirect()->route('cart.index');
    }


    public function cancelAllReservation(){
        session()->flush();
        return redirect()->route('cart.index');
    }

    public function destroy($id){
        session()->flush();
        return redirect()->route('cart.index');
    }
}
