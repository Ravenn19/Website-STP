<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Exclusive;
use App\Mail\ExclusiveReservationNotification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class ExclusiveController extends BaseController
{
    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'applicantType' => 'required|in:dosen_mahasiswa,lembaga_eksternal',
            'address' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'exc' => 'required|string|max:255', // Changed from 'lab' to 'exc'
            'date' => 'required|date',
            'time' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg|max:2048',
            'agreement' => 'accepted'
        ]);

        $folderName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $request->fullName);
        $filePath = $request->file('file')->store("exc_uploads/{$folderName}", 'public');

        $reservation = Exclusive::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'applicantType' => $request->applicantType,
            'address' => $request->address,
            'institution' => $request->institution,
            'exc' => $request->exc, // Changed from 'lab' to 'exc'
            'date' => $request->date,
            'time' => $request->time,
            'file' => $filePath,
        ]);

        $emailData = [
            'fullName' => $reservation->fullName,
            'email' => $reservation->email,
            'phone' => $reservation->phone,
            'applicantType' => $reservation->applicantType,
            'address' => $reservation->address,
            'institution' => $reservation->institution,
            'exc' => $reservation->exc, // Changed from 'lab' to 'exc'
            'date' => \Carbon\Carbon::parse($reservation->date)->format('d F Y'), // Konversi ke Carbon dulu
            'time' => $reservation->time,
            'filePath' => storage_path('app/public/' . $reservation->file)
        ];

        try {
            Mail::to('iceprince1964@gmail.com')->send(new ExclusiveReservationNotification($emailData));
        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Exclusive room reservation submitted successfully! Our team will contact you shortly to confirm your booking.');
    }
}
