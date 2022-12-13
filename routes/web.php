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
Route::get('/account',[AccountController::class,'Account'])->name('account');
Route::get('/add-account',[AccountController::class,'AddAccount'])->name('add-account');
Route::get('/account-list',[AccountController::class,'AccountList'])->name('account-list');
Route::get('/add-income-or-expence-info',[AccountController::class,'AddIncomeOrExpenceInfo'])->name('add-income-or-expence-info');
Route::get('/income-or-expence-list',[AccountController::class,'IncomeOrExpenceList'])->name('income-or-expence-list');
Route::get('/ledger',[AccountController::class,'Ledger'])->name('ledger');
Route::get('/ledger-report',[AccountController::class,'LedgerReport'])->name('ledger-report');
Route::get('/ledger-report-monthly',[AccountController::class,'LedgerReportMonthly'])->name('ledger-report-monthly');
Route::get('/income-expense-report',[AccountController::class,'IncomeExpenseReport'])->name('income-expense-report');
Route::get('/refund-report',[AccountController::class,'RefundReport'])->name('refund-report');
Route::get('/ledger-advance-salary-report',[AccountController::class,'LedgerAdvanceSalaryReport'])->name('ledger-advance-salary-report');



// Dues Routes
Route::get('/dues',[DuesController::class,'dues'])->name('account');
route::get('/duesNursery',[DuesController::class,'duesNursery'])->name('duesNursery');
route::get('/duesNurseryDetails',[DuesController::class,'duesNurseryDetails'])->name('duesNurseryDetails');

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
Route::get('/homework',[HomeWorkController::class,'Homework'])->name('homework');
Route::get('/homework-add',[HomeWorkController::class,'HomeworkAdd'])->name('homework-add');
Route::get('/homework-list',[HomeWorkController::class,'HomeworkList'])->name('homework-list');
Route::get('/add-classwork',[HomeWorkController::class,'AddClasswork'])->name('add-classwork');
Route::get('/classwork-list',[HomeWorkController::class,'ClassworkList'])->name('classwork-list');






// set paper routes

Route::get('/set-paper',[SetPaperController::class,'SetPaper'])->name('set-paper');
Route::get('/add-question',[SetPaperController::class,'AddQuestion'])->name('add-question');
Route::get('/view-question',[SetPaperController::class,'ViewQuestion'])->name('view-question');
Route::get('/instant-go-to-paper-setter',[SetPaperController::class,'InstantGoToPaperSetter'])->name('instant-go-to-paper-setter');
Route::get('/go-to-paper-setter',[SetPaperController::class,'GoToPaperSetter'])->name('go-to-paper-setter');
Route::get('/total-paper-list',[SetPaperController::class,'TotalPaperList'])->name('total-paper-list');


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
Route::get('/add-sports',[SportController::class,'AddSport'])->name('add-sport');
Route::get('/sports-type',[SportController::class,'SportType'])->name('sport-type');
Route::get('/age-category',[SportController::class,'AgeCategory'])->name('age-category');
Route::get('/add-participate',[SportController::class,'AddParticipate'])->name('add-participate');
Route::get('/participate-list',[SportController::class,'ParticipateList'])->name('participate-list');
Route::get('/team-creation',[SportController::class,'TeamCreation'])->name('team-creation');
Route::get('/team-creation-list',[SportController::class,'TeamCreationList'])->name('team-creation-list');





//  download routes
Route::get('/download',[DownloadController::class,'download'])->name('download');

//  recycle bin routes
Route::get('/recycle-bin',[RecycleBinController::class,'RecycleBin'])->name('recycle-bin');
Route::get('/recycle-student-admission-list',[RecycleBinController::class,'RecycleStudentAdmissionList'])->name('recycle-student-admission-list');
Route::get('/recycle-employee-list',[RecycleBinController::class,'RecycleEmployeeList'])->name('recycle-employee-list');
Route::get('/recycle-expense-list',[RecycleBinController::class,'RecycleExpenseList'])->name('recycle-expense-bin');
Route::get('/recycle-hostel-student-list',[RecycleBinController::class,'RecycleHostelStudentList'])->name('recycle-hostel-student-list');
Route::get('/recycle-hostel-account-list',[RecycleBinController::class,'RecycleHostelAccountList'])->name('recycle-hostel-account-list');
Route::get('/student-registration-list',[RecycleBinController::class,'StudentRegistrationList'])->name('student-registration-list');



// session  routes
Route::get('/session',[SessionController::class,'session'])->name('session');
Route::get('/add-session',[SessionController::class,'AddSession'])->name('add-session');
Route::get('/move-student',[SessionController::class,'MoveStudent'])->name('move-student');




// reminder routes
Route::get('/reminder',[ReminderCotroller::class,'reminder'])->name('reminder');
Route::get('/reminder-add',[ReminderCotroller::class,'ReminderAdd'])->name('reminder-add');
Route::get('/reminder-list',[ReminderCotroller::class,'ReminderList'])->name('reminder-list');
Route::get('/reminder-teacher-add',[ReminderCotroller::class,'ReminderTeacherAdd'])->name('reminder-teacher-add');
Route::get('/reminder-teacher-list',[ReminderCotroller::class,'ReminderTeacherList'])->name('reminder-teacher-list');




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
<<<<<<< HEAD
=======





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
>>>>>>> f5e753aa3c731a5d4b7eb3085852e48f18388293
