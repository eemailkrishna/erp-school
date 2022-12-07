<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    public function TimeTable(){
        return view('time_table.time_table');
    }
}
