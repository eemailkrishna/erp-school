<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function android_app(){
        return view('android_app.android_app');
    }
}
