<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms(){
        return view('sms.sms_panel');
    }
}
