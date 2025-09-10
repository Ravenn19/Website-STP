<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ExclusiveReservationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $reservationData;

    public function __construct($reservationData)
    {
        $this->reservationData = $reservationData;
    }

    public function build()
    {
        Log::info('Exclusive Room Reservation Email Data:', $this->reservationData);

        $email = $this->subject('Penyewaan Exclusive Room Baru - ' . $this->reservationData['exc'])
                    ->view('emails.exc_reservation', [
                        'reservation' => $this->reservationData
                    ]);

        if (isset($this->reservationData['filePath'])) {
            if (file_exists($this->reservationData['filePath'])) {
                $email->attach($this->reservationData['filePath'], [
                    'as' => 'Surat_Permohonan.' . pathinfo($this->reservationData['filePath'], PATHINFO_EXTENSION)
                ]);
            } else {
                Log::error('Attachment file not found: ' . $this->reservationData['filePath']);
            }
        }

        return $email;
    }
}
