<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolInfoController extends Controller
{
    public function index()
    {
        return view('school_info.school_info');
    }

    public function schoolgeneralinfo()
    {
        return view('school_info.school_info_general');
    }


    public function schoolinfoacademiccalender()
    {
        return view('school_info.academic_calender');
    }
    public function schoolinfoaddbuscategorymonthlywise()
    {
        return view('/school_info.add_bus_fee_category_monthly_installmentwise');
    }
    public function schoolInfoaddstudentidentitycategory()
    {
        return view('school_info.add_student_identity_category');
    }
    public function schoolInfoAddFeeCategory()
    {
        return view('school_info.fee_category_add');
    }
    public function school_info_syllabusDetails()
    {
        return view('school_info.student_syllabus_details');
    }
}
