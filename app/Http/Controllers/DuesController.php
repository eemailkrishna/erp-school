<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuesController extends Controller
{
    public function dues(){
        return view('dues.dues');
    }
}
