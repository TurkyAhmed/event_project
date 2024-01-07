<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable =[
        'name',
        'price',
        'is_main_service',
        'is_avaliable',
        'description',
    ];

    public function resrvation_detail(){
        return $this->belongsToMany(Reservation_Detail::class);
    }
}
