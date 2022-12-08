<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveBusController extends Controller
{
    public function live_bus(){
        return view('live_bus.bus_tracking');
    }
}
