<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovRequireController extends Controller
{
    public function gov_requirement(){
            return view('govt_requirement.govt_requirement');
    }
}
