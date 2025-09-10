<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class LabReservationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $reservationData;

    public function __construct($reservationData)
    {
        $this->reservationData = $reservationData;
    }

    public function build()
    {
        // Debug data yang diterima
        \Log::info('Email Data:', $this->reservationData);

        $email = $this->subject('Penyewaan Laboratorium Baru - ' . $this->reservationData['lab'])
                    ->view('emails.lab_reservation', [
                        'reservation' => $this->reservationData // Pastikan variabel ini dipakai di view
                    ]);

        // Cek eksistensi file sebelum attach
        if (isset($this->reservationData['filePath']) && file_exists($this->reservationData['filePath'])) {
            $email->attach($this->reservationData['filePath'], [
                'as' => 'Surat_Permohonan.' . pathinfo($this->reservationData['filePath'], PATHINFO_EXTENSION)
            ]);
        } else {
            \Log::error('File not found: ' . ($this->reservationData['filePath'] ?? 'null'));
        }

        return $email;
    }
}
