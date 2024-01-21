<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicViewController extends Controller
{

    public function redirectpage(){
        if(Auth()->user()->role['name'] == 'admin'){
            return redirect()->route('admin.dashboard');
        }
        else {
            return redirect('/');
        }
    }


}
