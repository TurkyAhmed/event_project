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
        $sdrvice = Service::create($request->all());
        return redirect('services');

        // return $sdrvice;
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
        return redirect('services');
    }


    public function delete($id){
        $service = Service::find($id);
        return view('services.delete',compact('service'));
    }


    public function destroy($id)
    {
        Service::findorfail($id)->delete();
        return redirect('services');
    }
}
