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
        'price',
        'note',
    ];

    public function reservation(){
        return $this->hasOne(Reservation::class);
    }

    public function hall(){
        return $this->hasOne(Hall::class);
    }

    public function service(){
        return $this->hasOne(Service::class);
    }
}
