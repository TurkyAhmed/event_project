<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        // dd($services);
        return view ('services.index',compact('services'));
    }


    public function create()
    {
        return view('services.create');
    }

    public function store(ServicesRequest $request)
    {
        return $request ;
        $sdrvice = Service::create($request->all());
        return redirect('services')->with('successMsg', 'تم الاضافة بنجاح');

    }


    public function show($id)
    {
        $service = Service::find($id);
        return view('services.details',compact('service'));
    }


    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit',compact('service'));
    }

    public function update(ServicesRequest $request, $id)
    {
        $service = Service::find($id);
        $service->update($request->all());

        return redirect()->route('services.index')->with('successMsg', 'تم التعديل بنجاح');
    }


    public function delete($id){
        $service = Service::find($id);

        return view('services.delete',compact('service'));
    }


    public function destroy($id)
    {
        Service::findorfail($id)->delete();
        return redirect()->route('services.index')->with('successMsg', 'تم الحذف بنجاح');
    }

       // Soft Delete

       public function softDelete(){
        $Services = Service::onlyTrashed()->get();
        return view('Services.ServicesSoftDelete',compact('Services'));
    }


    public function restore($id){
        Service::withTrashed()->where('id',$id)->restore();

        return redirect()->back();
    }


    public function forcedelete($id){
        Service::withTrashed()->where('id',$id)->forcedelete();
        return redirect()->back();
    }
}
