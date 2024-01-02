<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class PublicViewController extends Controller
{

    public function roomdetails($id){
        $hall = Hall::findorfail($id);

        return view('publicViews.roomdetials',compact('hall'));
    }
}
