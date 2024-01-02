<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation_Detail extends Model
{
    use HasFactory;
    
    use SoftDeletes;

    protected $fillable = [
        'reservation_id',
        'hall_id',
        'service_id',
        'service_count',
        'note',
    ];
}
