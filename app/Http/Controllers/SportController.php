<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function sport(){
        return  view('sports.sports');
    }
}
