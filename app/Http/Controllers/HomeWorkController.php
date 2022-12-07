<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeWorkController extends Controller
{
    public function homework(){
        return view('homework.homework');
    }
}
