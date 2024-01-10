<?php

namespace App\Console\Commands;

use App\Mail\ReservationReminderMail;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReservationReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:reservation-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $reservations = Reservation::all();

        foreach ($reservations as $reservation) {
            $reservationDate = Carbon::parse($reservation->date_from);
            $currentDate = Carbon::now();

            if ($reservationDate->diffInDays($currentDate) <= 2) {
                // Send reminder email
                Mail::to('tasg1818@gmail.com')->send(new ReservationReminderMail($reservation));
            }
        }

        $this->info('Reminder emails sent successfully.');
    }
}
