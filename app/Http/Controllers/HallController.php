<?php

namespace App\Http\Controllers;

use App\Http\Requests\HallRequest;
use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HallController extends Controller
{

    public function index()
    {
        $halls = Hall::paginate(3);
        // dd($halls);
        return view('halls.index',['halls'=>$halls]);
    }


    public function create()
    {
        return view('halls.create');
    }


    public function store(HallRequest $request)
    {
        Hall::create($request->all());
        return redirect('halls');
    }


    public function show( $id)
    {
        $hall = Hall::find($id);
        return view('halls.details',compact('hall'));
        // return $hall;
    }


    public function edit($id)
    {
        $hall = Hall::find($id);
        return view('halls.edit',compact('hall'));
    }



    public function update(HallRequest $request, $id)
    {
        $hall = Hall::find($id);
        $hall->update($request->all());
        return redirect()->route('halls.index');
    }


    public function delete($id){
        $hall = Hall::find($id);
        return view('halls.delete',compact('hall'));

    }

    public function destroy( $id)
    {
        Hall::find($id)->delete();
        return redirect()->route('halls.index');
    }


    // Soft Delete

    public function softDelete(){
        $halls = Hall::onlyTrashed()->get();
        return view('halls.hallsSoftDelete',compact('halls'));
    }


    public function restore($id){
        Hall::withTrashed()->where('id',$id)->restore();

        return redirect()->back();
    }


    public function forcedelete($id){
        Hall::withTrashed()->where('id',$id)->forcedelete();
        return redirect()->back();
    }


    public function landingpageHalls(){
        $halls = Hall::all();
        return view('halls.landingpage_halls',compact('halls'));
    }


    public function landingpageHallDetails($id){
        $hall = Hall::find($id);

        return view('halls.landingpage_hall_details',compact('hall'));
    }
}
