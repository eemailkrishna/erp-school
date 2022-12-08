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
