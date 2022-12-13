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
Route::get('certificate/character_certificate_form', [CertificateController::class, 'character_certificate_form'])->name('cc');
Route::get('certificate/character_certificate_form_edit', [CertificateController::class, 'character_certificate_form_edit'])->name('ccedit');
Route::get('certificate/annualfee_certificate_form_edit', [CertificateController::class, 'annualfee_certificate_form_edit'])->name('ac');
Route::get('certificate/annualfee_form',[CertificateController::class,'annualfee_form'])->name('af');
Route::get('certificate/birth_certificate', [CertificateController::class, 'birth_certificate'])->name('birth');
Route::get('certificate/character_certificate_list', [CertificateController::class, 'character_certificate_list'])->name('cclist');
Route::get('certificate/event_certificate_form', [CertificateController::class, 'event_certificate_form'])->name('ecf');
Route::get('certificate/bonafied_form', [CertificateController::class, 'bonafied_form'])->name('bf');
Route::get('certificate/bonafied_certificate_form', [CertificateController::class, 'bonafied_Cer_form'])->name('bcf');
Route::get('certificate/tutionfee_form', [CertificateController::class, 'tutionfee_form'])->name('tf');
Route::get('certificate/tc_list', [CertificateController::class, 'tc_list'])->name('tl');
Route::get('certificate/tc_form', [CertificateController::class, 'tc_form'])->name('tf');
Route::get('certificate/tc_form_edit', [CertificateController::class, 'tc_form_edit'])->name('tfe');
Route::get('certificate/sport_certificate_list', [CertificateController::class, 'sport_certificate_list'])->name('sc');
Route::get('certificate/sport_certificate_form', [CertificateController::class, 'sport_certificate_form'])->name('scf');
Route::get('certificate/sport_certificate_form', [CertificateController::class, 'sport_certificate_form'])->name('scf');
Route::get('certificate/event_certificate_list', [CertificateController::class, 'event_certificate_list'])->name('ecl');
Route::get('certificate/bonafied_certificate_list', [CertificateController::class, 'bonafied_certificate_list'])->name('bl');
Route::get('certificate/tutionfee_certificate_list', [CertificateController::class, 'tutionfee_certificate_list'])->name('bl');
Route::get('certificate/annualfee_certificate_list', [CertificateController::class, 'annualfee_certificate_list'])->name('afl');
Route::get('certificate/caste_certificate_form', [CertificateController::class, 'caste_certificate_form'])->name('ccf');
Route::get('certificate/caste_certificate_list', [CertificateController::class, 'caste_certificate_list'])->name('ccl');


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