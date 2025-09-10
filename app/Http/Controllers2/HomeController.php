<?php

namespace App\Http\Controllers2;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Dashboard'); // pastikan kamu punya file resources/views/home.blade.php
    }
}
