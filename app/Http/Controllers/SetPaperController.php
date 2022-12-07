<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetPaperController extends Controller
{
    public function SetPaper(){
        return view('exam_paper_setter.exam_paper_setter');
    }
}
