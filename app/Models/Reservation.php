<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ReservationStatus;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;

    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'interval',
        'status',
        'date_from',
        'date_to',
        'type_of_event',
        'note',
    ];


    protected $casts =[
        'status'=>ReservationStatus::class
    ];
}
