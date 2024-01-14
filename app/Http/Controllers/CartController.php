<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function addToCart(Request $request){
        $hall_id = $request->hall_id;

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
                'services_ids' => $request->service_id,
                'price' => $request->price,
                'quantity'=>$request->quantity
            ];
        }

        session()->put('cart',$cart);


        // $_cart = session()->get('cart', []);


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
        $services = Service::whereIn('id',$services_ids)->get();

        return view('cart.details',compact('hall','cartItem','services'));
    }




    public function edit($id){
        $cart = session()->get('cart', []);

        // return $cart;

        $hall = Hall::find($id);
        $allsevices = DB::table('services')
                        ->where('is_avaliable',1)
                        ->where('is_main_service',0)
                        ->get();

        $cartItem = $cart[$id];

        $services_ids = $cartItem['services_ids'];
        $services = Service::whereIn('id',$services_ids)->get();

        return view('cart.edit',compact('hall','cartItem','services','allsevices'));
    }


    public function update(Request $request ,$id){

        // return $request;
        $hallId = $request->hall_id;
        $cart = session()->get('cart', []);


        if (isset($cart[$hallId])) {
            // Update the relevant values in the cart item
            $cart[$hallId]['price'] = $request->price;
            $cart[$hallId]['quantity'] = $request->quantity;
            $cart[$hallId]['totalOfService'] = $request->totalOfService;
            $cart[$hallId]['services_ids'] = $request->services_ids;
            session()->put('cart', $cart);
        } else {
            //TODO error if not found throw exciption
        }

        $_cart = session()->get('cart', []);


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



    public function destroy($id){
        session()->flush();
        return redirect()->route('cart.index');
    }
}
