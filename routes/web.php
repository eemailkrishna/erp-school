<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DuesController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\PenalityController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\HomeWorkController;
use App\Http\Controllers\SetPaperController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\TimeTableController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\RecycleBinController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ReminderCotroller;
use App\Http\Controllers\GovRequireController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\LiveBusController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserRightController;
use App\http\Controllers\SmartClassController;
use App\Http\Controllers\VideoLectureController;
use App\Http\Controllers\VideoLectureAddController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index_content');
});

//  attendance route
Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
Route::get('student/attendance',[AttendanceController::class,'student_attendance'])->name('students');

// enquiry routes
Route::get('/enquiry',[EnquiryController::class,'enquiry'])->name('enquiry');


// staff route
Route::get('/staff',[StaffController::class,'staff'])->name('staff');
Route::get('/staff-add',[StaffController::class,'StaffAdd'])->name('staff-add');
Route::get('/Emp-List',[StaffController::class,'EmpList'])->name('emp-list');
Route::get('/Emp-Drop',[StaffController::class,'EmpDrop'])->name('emp-drop');
Route::get('/Emp-Attendance', [StaffController::class, 'EmpAttendance'])->name('emp-attendance');
Route::get('/Assign-Card', [StaffController::class, 'AssignCard'])->name('assign-card');
Route::get('/Attendance-Register', [StaffController::class, 'AttendRegister'])->name('attend-register');
Route::get('/Id_Generate', [StaffController::class, 'IdGenrator'])->name('id_generate');
Route::get('/salary_generate', [StaffController::class, 'Salary_Generate'])->name('generate_salary');

// student routes
Route::get('/student',[StudentController::class,'student'])->name('student');

// Account Routes
Route::get('/account',[AccountController::class,'account'])->name('account');

// Dues Routes
Route::get('/dues',[DuesController::class,'dues'])->name('account');

// Fees routes
Route::get('/fees',[FeesController::class,'fees'])->name('account');
Route::get('/reset-Fee', [FeesController::class, 'ResetFees'])->name('resetfees');
Route::get('/dues-detail', [FeesController::class, 'DuesDetail'])->name('dues');
Route::get('/fee-structure', [FeesController::class, 'FeeStructure'])->name('structure');
Route::get('/student_admission', [FeesController::class, 'Student_Admission'])->name('admission');
Route::get('/classwise_fees', [FeesController::class, 'Classwise_Fees'])->name('classwise');
Route::get('/classwise_transport', [FeesController::class, 'Classwise_Transport'])->name('Transport');
Route::get('/prev_year', [FeesController::class, 'Prev_Years'])->name('PrevYears');
Route::get('/std_fee_add_form',[FeesController::class,'Std_Fee_Form'])->name('std_form_add');
Route::get('/std_fee_list',[FeesController::class,'Std_Fee_List'])->name('std_list_fee');
Route::get('/std_fee_list_rfid',[FeesController::class,'Std_Fee_List_RFID'])->name('std_list_fee_RFID');
Route::get('/std_fee_dues_list',[FeesController::class,'Std_Fee_Dues_List'])->name('std_list_fee_dues');
Route::get('/std_fee_demand_bill',[FeesController::class,'Std_Fee_Demand_Bill'])->name('fee_bill_demand');
Route::get('/std_fee_demand_newbill_list',[FeesController::class,'Std_Fee_Demand_NewBill_List'])->name('fee_bill_demand_newbill');
Route::get('/std_fee_balance',[FeesController::class,'Std_Fee_Balance'])->name('fee_balance');
Route::get('/std_fee_balance_detail',[FeesController::class,'Std_Fee_Balance_Detail'])->name('fee_balanceDetail');
Route::get('/balance_detail',[FeesController::class,'Balance_Detail'])->name('balanceDetail');
Route::get('/reset_transport',[FeesController::class,'Reset_Transport'])->name('reset_transport');
Route::get('/set_transport_dues',[FeesController::class,'Set_Transport_Dues'])->name('set_transport_dues');
Route::get('/add_bus_fee_category',[FeesController::class,'Add_Bus_Fee_Category'])->name('bus_add_category');
Route::get('/set_classwise_transport',[FeesController::class,'Set_Classwise_Transport'])->name('fee detail');
Route::get('/challan_list',[FeesController::class,'Challan_List'])->name('challan_List');
Route::get('/transport_form',[FeesController::class,'Std_Transport_Fee_Add_Form'])->name('fee_add_form_transport');
Route::get('/transport_fee_list',[FeesController::class,'Fee_List_Transport'])->name('transport_fee_list');
Route::get('/dues_list',[FeesController::class,'Dues_List'])->name('dues_list');
Route::get('/report',[FeesController::class,'Report'])->name('report');
Route::get('/report_transport',[FeesController::class,'Report_Transport'])->name('report_transport');
Route::get('/buswise_list',[FeesController::class,'Buswise_List'])->name('buswise_list');


// Penality
Route::get('/penalty',[PenalityController::class,'penality'])->name('penality');

//  Certificate route
Route::get('/certificate',[CertificateController::class,'certificate'])->name('certificate');


// Examination
Route::get('/examination',[ExaminationController::class,'examination'])->name('examination');

// homework
Route::get('/homework',[HomeWorkController::class,'homework'])->name('homework');

// set paper routes

Route::get('/set-paper',[SetPaperController::class,'SetPaper'])->name('set-paper');

// complaint route
Route::get('/complaint',[ComplaintController::class,'complaint'])->name('complaint');

// gallary route
Route::get('/gallery',[GallaryController::class,'gallery'])->name('gallery');

// sms  routes
Route::get('/sms',[SmsController::class,'sms'])->name('sms');

// time table route
Route::get('/time-table',[TimeTableController::class,'TimeTable'])->name('time-table');


//  Event routes
Route::get('/event',[EventController::class,'event'])->name('event');

// sport

Route::get('/sports',[SportController::class,'sport'])->name('sport');

//  download routes
Route::get('/download',[DownloadController::class,'download'])->name('download');

//  recycle bin routes
Route::get('/recycle-bin',[RecycleBinController::class,'recylebin'])->name('recycle');

// session  routes
Route::get('/session',[SessionController::class,'session'])->name('session');

// reminder routes
Route::get('/reminder',[ReminderCotroller::class,'reminder'])->name('reminder');


//  govt routes
Route::get('/govt-requirement',[GovRequireController::class,'gov_requirement'])->name('gov-requirement');

//
Route::get('/hostel',[HostelController::class,'hostel'])->name('hostel');

//libary  route
Route::get('/library',[LibraryController::class,'library'])->name('library');

// Stock  routes
Route::get('/stock',[StockController::class,'stock'])->name('stocks');

// live bus tracking routes
Route::get('/live-bus',[LiveBusController::class,'live_bus'])->name('live-bus');

//  Android app controller
Route::get('/app',[AppController::class,'android_app'])->name('app');

//  user right
Route::get('/user-right',[UserRightController::class,'UserRight'])->name('user-right');

// smartclass
Route::get('/smartclass',[SmartClassController::class,'SmartClass'])->name('smartclass');

// video-lecture
Route::get('smartclass/video_lecture',[VideoLectureController::class,'VideoLecture'])->name('videolecture');

// VideoLectureAdd
Route::get('smartclass/video_lecture_add',[VideoLectureAddController::class,'VideoLectureAdd'])->name('videolectureadd');
