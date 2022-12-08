<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostelController extends Controller
{
    public function hostel(){
        return view('hostel.hostel');
    }
}
