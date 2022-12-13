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

Route::get('/staff',[StaffController::class,'staff'])->name('staff');

// student routes
Route::get('/student',[StudentController::class,'student'])->name('student');
Route::get('/student/student_registration',[StudentController::class,'registration'])->name('registration');
Route::get('/student/student_registration_list_fatch',[StudentController::class,'registration_list'])->name('registration_list');
Route::get('/student/student_admission_list',[StudentController::class,'admission_list'])->name('admission_list');
Route::get('/student/student_profile_update',[StudentController::class,'student_profile'])->name('student_profile');
Route::get('/student/student_mapping_data_update',[StudentController::class,'student_mapping'])->name('student_mapping');
Route::get('/student/student_photo_update',[StudentController::class,'student_photo'])->name('student_photo');
Route::get('/student/student_sms_contact_update',[StudentController::class,'student_sms'])->name('student_sms');
Route::get('/student/student_sms_notification_update',[StudentController::class,'student_sms_notification'])->name('student_sms_notification');
Route::get('/student/rfid_card_generate',[StudentController::class,'student_rfd'])->name('student_rfd');
Route::get('/student/student_roll_no',[StudentController::class,'student_roll_no'])->name('student_roll_no');
Route::get('/student/student_id_card',[StudentController::class,'student_id_card'])->name('student_id_card');
Route::get('/student/mother_student_id_card',[StudentController::class,'mother_student_id_card'])->name('mother_student_id_card');
Route::get('/student/father_student_id_card',[StudentController::class,'father_student_id_card'])->name('father_student_id_card');
Route::get('/student/guardian_student_id_card',[StudentController::class,'guardian_student_id_card'])->name('guardian_student_id_card');
Route::get('/student/health_zone',[StudentController::class,'health_zone'])->name('health_zone');
Route::get('/student/physical_fitness',[StudentController::class,'physical_fitness'])->name('physical_fitness');
Route::get('/student/report_student_strength_castewise',[StudentController::class,'student_strength'])->name('student_strength');
Route::get('/student/report_student_strength_religionwise',[StudentController::class,'student_strength_religion'])->name('student_strength_religion');
Route::get('/student/student_registration_report',[StudentController::class,'student_registration_rep'])->name('student_registration_rep');
// Account Routes
Route::get('/account',[AccountController::class,'account'])->name('account');

// Dues Routes
Route::get('/dues',[DuesController::class,'dues'])->name('account');

// Fees routes
Route::get('/fees',[FeesController::class,'fees'])->name('account');


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