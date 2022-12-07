<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function examination(){
        return view('examination.examination');
    }
}
