<?php

namespace App\Http\Controllers;

use App\Http\Requests\HallRequest;
use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HallController extends Controller
{
    private $imgs =[
                    '1'=>['sada1.jpg','sada2.jpg','sada3.jpg','sada4.jpg'], //2 hagrain 6shabam
                    '2'=>['istdama1.jpg','istdama2.jpg','istdama3.jpg'],
                    '3'=>['istdama1.jpg','istdama2.jpg','istdama3.jpg'],
                    '4'=>['con1.jpg','con2.jpg','con3.jpg'],
                    '5'=>['salam1.jpg','salam2.jpg','salam3.jpg','salam4.jpg'],
                    '6'=>['aon1.jpg','aon2.jpg','aon3.jpg',],
                    '7'=>['aon1.jpg','aon2.jpg','aon3.jpg',],
                    '8'=>['aon1.jpg','aon2.jpg','aon3.jpg',],
    ];



    public function index()
    {
        $halls = Hall::paginate(10);

        return view('halls.index',['halls'=>$halls, 'link_active'=>'halls']);
    }


    public function create()
    {
        return view('halls.create');
    }


    public function store(HallRequest $request)
    {
        Hall::create($request->all());
        return redirect()->route('halls.index')->with('successMsg', 'تم الاضافة بنجاح');
    }


    public function show( $id)
    {
        $hall = Hall::find($id);
        return view('halls.details',compact('hall'));
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
        return redirect()->route('halls.index')->with('successMsg', 'تم التعديل بنجاح');
    }


    public function delete($id){
        $hall = Hall::find($id);
        return view('halls.delete',compact('hall'));
    }

    public function destroy( $id)
    {
        Hall::find($id)->delete();
        return redirect()->route('halls.index')->with('successMsg', 'تم الحذف بنجاح');
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
        $halls = Hall::all()->where('is_avaliable',1);
        $imgs = $this->imgs;
        // return $imgs;
        return view('halls.landingpage_halls',compact('halls','imgs'));
    }


    public function landingpageHallDetails($id){
        $hall = Hall::find($id);
        $imgs =$this->imgs[$id];

        return view('halls.landingpage_hall_details',compact('hall','imgs'));
    }
}
