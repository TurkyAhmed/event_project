<?php

namespace App\Enums;

enum ReservationStatus :string{

    case Wait = 'في الانتظار';
    case Approved = 'تمت الموافقة';
    case Cancel = 'تم الغاء الحجز';
    case Late = 'تأخير الحجز';


    public function background():string {
        return match($this){
            self::Wait =>'bg-waiting',
            self::Approved =>'bg-approved',
            self::Cancel =>'bg-cancel',
            self::Late =>'bg-late',
        };
    }
}
