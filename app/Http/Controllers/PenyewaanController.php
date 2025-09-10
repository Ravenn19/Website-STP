<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Penyewaan;
use App\Mail\LabReservationNotification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class PenyewaanController extends BaseController
{
    public function store(Request $request)
    {
        // Validasi input
        $rules = [
            'fullName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'applicantType' => 'required',
            'address' => 'required',
            'institution' => 'required',
            'lab' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg',
            'agreement' => 'accepted'
        ];

        if ($request->applicantType === 'dosen_mahasiswa') {
            $rules['faculty'] = 'required';
        }

        $request->validate($rules);

        // 1. SIMPAN KE DATABASE
        $folderName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $request->fullName);
        $filePath = $request->file('file')->store("uploadlab/{$folderName}", 'public');

        $reservation = Penyewaan::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'applicantType' => $request->applicantType,
            'address' => $request->address,
            'institution' => $request->institution,
            'faculty' => $request->faculty,
            'lab' => $request->lab,
            'date' => $request->date,
            'time' => $request->time,
            'file' => $filePath,
        ]);

        // 2. KIRIM EMAIL
        $emailData = [
            'fullName' => $reservation->fullName,
            'email' => $reservation->email,
            'phone' => $reservation->phone,
            'applicantType' => $reservation->applicantType,
            'address' => $reservation->address,
            'institution' => $reservation->institution,
            'faculty' => $reservation->faculty,
            'lab' => $reservation->lab,
            'date' => $reservation->date,
            'time' => $reservation->time,
            'filePath' => Storage::path('public/' . $reservation->file)
        ];

        try {
            Mail::to('iceprince1964@gmail.com')->send(new LabReservationNotification($emailData));
        } catch (\Exception $e) {
            // Log error jika gagal mengirim email
            \Log::error('Gagal mengirim email: ' . $e->getMessage());
        }

        return back()->with('success', 'Penyewaan berhasil disimpan dan notifikasi telah dikirim.');
    }
}
