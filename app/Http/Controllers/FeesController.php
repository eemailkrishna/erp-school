<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function fees(){
        return view('fees_monthly.fees');
    }
}
