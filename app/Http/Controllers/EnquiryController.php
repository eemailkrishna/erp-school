<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function enquiry(){
        return view('enquiry.enquiry');
    }
}
