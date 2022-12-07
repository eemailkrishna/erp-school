<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderCotroller extends Controller
{
    public function reminder(){
        return view('reminder.reminder');
    }
}
