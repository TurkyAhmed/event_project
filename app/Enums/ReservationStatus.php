<?php

namespace App\Enums;

enum ReservationStatus :string{

    case Wait = 'في الانتظار';
    case Approved = 'تمت الموافقة';
    case Cancel = 'تم الغاء الحجز';
    case Late = 'تأخير الحجز';
}
