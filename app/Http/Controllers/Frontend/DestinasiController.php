<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index () 
    {
        return view('frontend.destinasi.index');
    }

    public function show () 
    {
        return view('frontend.destinasi.detail');
    }
}