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
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\SchoolInfoController;
use App\Http\Controllers\HolidayController;





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
route::get('/duesNursery',[DuesController::class,'duesNursery'])->name('duesNursery');
route::get('/duesNurseryDetails',[DuesController::class,'duesNurseryDetails'])->name('duesNurseryDetails');

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
Route::get('/complaint-studentComplaint',[ComplaintController::class,'complaint_studentComplaint'])->name('complaint-studentComplaint');

Route::get('/complaint-staffFeedback',[ComplaintController::class,'complaint_staffFeedback'])->name('complaint_staffFeedback');

Route::get('/complaint-employeeComplaints',[ComplaintController::class,'complaint_employeeComplaints'])->name('complaint-employeeComplaints');


// gallary route
Route::get('/gallery',[GallaryController::class,'gallery'])->name('gallery');
Route::get('/gallery-addNewGallery',[GallaryController::class,'galleryAddNewGallery'])->name('galleryAddNewGallery');

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
Route::get('/govt-require-mappingList',[GovRequireController::class,'govt_require_mappingList'])->name('govt-require-mappingList');

Route::get('/govt_require_studentList',[GovRequireController::class,'govt_require_studentList'])->name('govt_require_studentList');
Route::get('/govt_require_contactNo',[GovRequireController::class,'govt_require_contactNo'])->name('govt_require_contactNo');


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
Route::get('/userRightAddUser',[UserRightController::class,'userRightAddUser'])->name('userRightAddUser');
Route::get('/userRightUserList',[UserRightController::class,'userRightUserList'])->name('userRightUserList');
Route::get('/userRightAdduserEdit',[UserRightController::class,'userRightAdduserEdit'])->name('userRightAdduserEdit');


// smartclass
Route::get('/smartclass',[SmartClassController::class,'SmartClass'])->name('smartclass');

// video-lecture
Route::get('smartclass/video_lecture',[VideoLectureController::class,'VideoLecture'])->name('videolecture');

// VideoLectureAdd
Route::get('smartclass/video_lecture_add',[VideoLectureAddController::class,'VideoLectureAdd'])->name('videolectureadd');





//leave

Route::get('/leave',[LeaveController::class,'index'])->name('leave');
Route::get('/student-leave-form',[LeaveController::class,'studentleaveform'])->name('studentleaveform');
Route::get('/student-leave-list',[LeaveController::class,'studentleavelist'])->name('studentleavelist');




//school info
Route::get('/school-info',[SchoolInfoController::Class,'index'])->name('schoolInfo');
Route::get('/school-school_general_info',[SchoolInfoController::Class,'schoolgeneralinfo'])->name('schoolgeneralinfo');
Route::get('/school-info_academic-calender',[SchoolInfoController::Class,'schoolinfoacademiccalender'])->name('schoolinfoacademiccalender');
Route::get('/schoolInfo-AddBusFeeCategory-MonthlyInstallmentwise',[SchoolInfoController::Class,'schoolinfoaddbuscategorymonthlywise'])->name('schoolinfoaddbuscategorymonthlywise');
Route::get('/schoolInfo-addstudentidentitycategory',[SchoolInfoController::Class,'schoolInfoaddstudentidentitycategory'])->name('schoolInfoaddstudentidentitycategory');
Route::get('/school-info_addfeecategory',[SchoolInfoController::class,'schoolInfoAddFeeCategory'])->name('schoolInfoAddFeeCategory');
Route::get('/school-info_syllabusDetails',[SchoolInfoController::class,'school_info_syllabusDetails'])->name('school_info_syllabusDetails');




//holiday
Route::get('/holiday',[HolidayController::class,'index'])->name('holiday');
Route::get('/holiday-addHoliday',[HolidayController::class,'holidayAddHoliday'])->name('holidayAddHoliday');
Route::get('/holiday-editHoliday',[HolidayController::class,'holidayEditHoliday'])->name('holidayEditHoliday');
Route::get('/holiday-holidayList',[HolidayController::class,'holidayHolidayList'])->name('holidayHolidayList');
