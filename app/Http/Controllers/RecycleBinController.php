<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecycleBinController extends Controller
{
    public function recylebin(){
        return view('recycle_bin.recycle_bin');
    }
}
