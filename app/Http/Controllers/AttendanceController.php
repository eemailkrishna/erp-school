<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attendance(){
           return view('attendance.attendance');
    }

    public function student_attendance(){

           return view('attendance.student_attendance_select');
    }
}
