<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hall extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'name',
        'capacity',
        'feature',
        'price',
        'discount',
        'is_avaliable',
        'description',
        'myPhoto',
    ];

    public function resrvation_detail(){
        return $this->belongsToMany(Reservation_Detail::class);
    }
}
