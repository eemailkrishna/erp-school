<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenalityController extends Controller
{
    public function penality(){
        return view('penalty.penalty');
    }
}
