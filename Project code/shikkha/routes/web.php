<?php

use App\course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Login Route
// Auth::routes(['verify' => true]);
Auth::routes();
Route::get('/home', 'admin\HomeController@index')->name('home');
Route::get('/', 'Auth\LoginController@index')->name('login-page');
Route::resource('/meeting','meetingController');
Route::get('/meeting/{meeting} ','meetingController@status')->name('status');



Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){

// Route::get('/mail', 'HomeController@test');
//    Route::get('/mail', 'mailController@sendmail');

//profile information
// Route::get('/personal-infomation', 'personalInfoController@index')->name('personal-infomation');
    Route::resource('/personal-infomation','admin\personalInformationController');

//institution
    Route::resource('/institution','admin\institutionController');
//verify institution
    Route::resource('/verify-institution','admin\verifyInstitutionController');
//Package
    Route::resource('/package','admin\packageController');
});


//faculty route
Route::resource('/faculty','institution\facultyController');
Route::get('/verified-faculties','institution\facultyController@verifiedFaculties')->name('verified-faculties');
//student route
Route::resource('/student','institution\studentController');
//department route
Route::resource('/department','institution\departmentController');
//course route
Route::resource('/course','institution\courseController');
//session route
Route::resource('/session','institution\sessionController');
Route::get('/previous-session','institution\sessionController@previousSession')->name('previous-session');
//timing route
Route::resource('/timing','institution\timingController');
//section route
Route::resource('/section','institution\sectionController');
Route::get('/section-student','institution\sectionController@student');



//faculty or teacher route define
//course list
Route::resource('/course-list','faculty\courseListController');
//stream list
Route::resource('/faculty-stream','faculty\streamController');
//exam route
Route::resource('/create-exam','faculty\createQuizController');
//stream list
Route::resource('/resource','faculty\resourceController');
Route::Post('/data','faculty\resourceController@fetch')->name('data.fetch');
//post list
Route::resource('/post','postController');
//comment list
Route::resource('/comment','commentController');
//comment list
Route::resource('/assign-work','faculty\assignExamController');

//student or student route define
//student list
Route::resource('/student-task','student\studentTaskController');
//Route::get('/student-task/{course_id}/{section_id}/{quiz_id}','student\studentTaskController@question')->name('question.show');



//Route::get('/test',function(){
//    $course=course::find(5);
//    dd($course->section[0]->sectiondetail[0]->faculty);
//});
//Route::get('/exam',function(){
//  return view('dashboard.student.exam');
//});
// Route::get('/question',function(){
//   return view('create_question');
// });









// // Forntend  url list
// Route::get('/register', function () {
//     return view('dashboard.register');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// });
// Route::get('/attendence', function () {
//     return view('dashboard.faculty.attendence');
// });
// Route::get('/stream', function () {
//     return view('dashboard.student.stream');
// });
// Route::get('/assigned-course', function () {
//     return view('dashboard.student.assigned-course');
// });
// Route::get('/class-time', function () {
//     return view('dashboard.student.class-time');
// });
// Route::get('/class-work', function () {
//     return view('dashboard.student.class-work');
// });
// Route::get('/course-resource', function () {
//     return view('dashboard.student.course-resource');
// });
// Route::get('/course-resource-home', function () {
//     return view('dashboard.student.course-resource-home');
// });
// Route::get('/attendence', function () {
//     return view('dashboard.student.attendence-home');
// });
// Route::get('/attendence-internal', function () {
//     return view('dashboard.student.attendence-internal');
// });
// Route::get('/faculty-evaluation', function () {
//     return view('dashboard.student.faculty-evaluation-home');
// });
// Route::get('/faculty-evaluation-internal', function () {
//     return view('dashboard.student.faculty-evaluation-internal');
// });
// Route::get('/results', function () {
//     return view('dashboard.student.result');
// });
// Route::get('/notifications', function () {
//     return view('dashboard.student.notifications');
// });
// Route::get('/message', function () {
//     return view('dashboard.student.message');
// });
// Route::get('/course-mate', function () {
//     return view('dashboard.student.course-mate');
// });
// Route::get('/course-mate-internal', function () {
//     return view('dashboard.student.course-mate-internal');
// });
// Route::get('/friends-home', function () {
//     return view('dashboard.student.friends-home');
// });
// Route::get('/add-friends', function () {
//     return view('dashboard.student.add-friends');
// });
// Route::get('/all-friends', function () {
//     return view('dashboard.student.all-friends');
// });
// Route::get('/friends-request', function () {
//     return view('dashboard.student.friends-request');
// });
// Route::get('/calendar', function () {
//     return view('dashboard.student.calendar');
// });
// Route::get('/todo', function () {
//     return view('dashboard.student.todo');
// });
// Route::get('/notes', function () {
//     return view('dashboard.student.notes');
// });
// Route::get('/offer-course', function () {
//     return view('dashboard.student.offer-course');
// });
// Route::get('/pre-advising', function () {
//     return view('dashboard.student.pre-advising');
// });
// Route::get('/advising', function () {
//     return view('dashboard.student.advising');
// });
// Route::get('/request-course', function () {
//     return view('dashboard.student.request-course');
// });
// Route::get('/stream-home', function () {
//     return view('dashboard.student.stream-home');
// });
// Route::get('/class-work-view', function () {
//     return view('dashboard.student.class-work-view');
// });
Route::get('/exam1', function () {
    return view('dashboard.student.exam');
});
// Route::get('/change-password', function () {
//     return view('dashboard.student.change-password');
// });
// Route::get('/recovery-password', function () {
//     return view('dashboard.student.recovery-password');
// });
// Route::get('/recovery-password-send-mail', function () {
//     return view('dashboard.student.recovery-password-send-mail');
// });
// Route::get('/personal-information', function () {
//     return view('dashboard.student.personal-information');
// });
// Route::get('/personal-information', function () {
//     return view('dashboard.student.personal-information');
// });




// faculty route start
//Route::get('/faculty-stream', function () {
//    return view('dashboard.faculty.faculty-stream');
//});
//Route::get('/faculty-stream-home', function () {
//    return view('dashboard.faculty.faculty-stream-home');
//});
Route::get('/faculty-assigned-course', function () {
    return view('dashboard.faculty.faculty-assigned-course');
});
Route::get('/faculty-class-time', function () {
    return view('dashboard.faculty.faculty-class-time');
});
Route::get('/faculty-attendence', function () {
    return view('dashboard.faculty.faculty-attendence');
});
Route::get('/faculty-calendar', function () {
    return view('dashboard.faculty.faculty-calendar');
});
Route::get('/faculty-todo', function () {
    return view('dashboard.faculty.faculty-todo');
});
Route::get('/faculty-conference', function () {
    return view('dashboard.faculty.faculty-conference');
});
Route::get('/faculty-message', function () {
    return view('dashboard.faculty.faculty-message');
});
Route::get('/faculty-notifications', function () {
    return view('dashboard.faculty.faculty-notifications');
});
Route::get('/faculty-personal-information', function () {
    return view('dashboard.faculty.faculty-personal-information');
});
Route::get('/faculty-make-question', function () {
    return view('dashboard.faculty.faculty-make-question');
});
Route::get('/faculty-class-work', function () {
    return view('dashboard.faculty.faculty-class-work');
});
Route::get('/faculty-class-work-all-task', function () {
    return view('dashboard.faculty.faculty-class-work-all-task');
});
Route::get('/faculty-class-work-all-student-task', function () {
    return view('dashboard.faculty.faculty-class-work-all-student-task');
});
Route::get('/faculty-class-work-task-view', function () {
    return view('dashboard.faculty.faculty-class-work-task-view');
});
Route::get('/faculty-class-work-task-view', function () {
    return view('dashboard.faculty.faculty-class-work-task-view');
});
//Route::get('/faculty-course-resource-home', function () {
//    return view('dashboard.faculty.faculty-course-resource-home');
//});
//Route::get('/faculty-course-resource', function () {
//    return view('dashboard.faculty.faculty-course-resource');
//});
Route::get('/faculty-offer-courses', function () {
    return view('dashboard.faculty.faculty-offer-courses');
});
Route::get('/faculty-pre-course-request', function () {
    return view('dashboard.faculty.faculty-pre-course-request');
});
Route::get('/faculty-course-request', function () {
    return view('dashboard.faculty.faculty-course-request');
});
Route::get('/faculty-grade', function () {
    return view('dashboard.faculty.faculty-grade');
});
Route::get('/faculty-individual-grade', function () {
    return view('dashboard.faculty.faculty-individual-grade');
});
Route::get('/faculty-check-cgpa', function () {
    return view('dashboard.faculty.faculty-check-cgpa');
});
Route::get('/faculty-individual-cgpa', function () {
    return view('dashboard.faculty.faculty-individual-cgpa');
});
Route::get('/faculty-evaluation', function () {
    return view('dashboard.faculty.faculty-evaluation');
});
Route::get('/faculty-evaluation-course-list', function () {
    return view('dashboard.faculty.faculty-evaluation-course-list');
});
Route::get('/faculty-view-evaluation-internal', function () {
    return view('dashboard.faculty.faculty-view-evaluation-internal');
});



//admin
// Route::get('/admin-personal-information', function () {
//     return view('dashboard.admin.admin-personal-information');
// });

Route::get('/admin-change-password', function () {
    return view('dashboard.admin.admin-change-password');
});
Route::get('/admin-pricing', function () {
    return view('dashboard.admin.admin-pricing');
});
Route::get('/admin-institutions', function () {
    return view('dashboard.admin.admin-institutions');
});
Route::get('/admin-verified-institutions', function () {
    return view('dashboard.admin.admin-verified-institutions');
});
Route::get('/admin-verified-institutions-insider', function () {
    return view('dashboard.admin.admin-verified-institutions-insider');
});
Route::get('/admin-add-admin', function () {
    return view('dashboard.admin.admin-add-admin');
});


// Institution
Route::get('/institution-general-information', function () {
    return view('dashboard.institution.institution-general-information');
});
Route::get('/institution-personal-information', function () {
    return view('dashboard.institution.institution-personal-information');
});
Route::get('/institution-package', function () {
    return view('dashboard.institution.institution-package');
});
Route::get('/institution-change-password', function () {
    return view('dashboard.institution.institution-change-password');
});

Route::get('/institution-faculty', function () {
    return view('dashboard.institution.institution-faculty');
});
Route::get('/institution-student', function () {
    return view('dashboard.institution.institution-student');
});
Route::get('/institution-courses', function () {
    return view('dashboard.institution.institution-courses');
});
Route::get('/institution-student-course-requests', function () {
    return view('dashboard.institution.institution-student-course-requests');
});

Route::get('/institution-faculty-attendance', function () {
    return view('dashboard.institution.institution-faculty-attendance');
});
Route::get('/institution-student-attendance', function () {
    return view('dashboard.institution.institution-student-attendance');
});
Route::get('/institution-results', function () {
    return view('dashboard.institution.institution-results1');
});
Route::get('/institution-view-evaluation', function () {
    return view('dashboard.institution.institution-view-evaluation');
});

Route::get('/institution-notifications', function () {
    return view('dashboard.institution.institution-notifications');
});
Route::get('/institution-message', function () {
    return view('dashboard.institution.institution-message');
});
Route::get('/institution-events', function () {
    return view('dashboard.institution.institution-events');
});
Route::get('/institution-notice', function () {
    return view('dashboard.institution.institution-notice');
});

Route::get('/institution-institution-rules', function () {
    return view('dashboard.institution.institution-institution-rules');
});
Route::get('/institution-add-role', function () {
    return view('dashboard.institution.institution-add-role');
});
Route::get('/institution-data-backup', function () {
    return view('dashboard.institution.institution-data-backup');
});
Route::get('/institution-result-backup', function () {
    return view('dashboard.institution.institution-result-backup');
});
Route::get('/institution-notice', function () {
    return view('dashboard.institution.institution-notice');
});

Route::get('/institution-calender', function () {
    return view('dashboard.institution.institution-calender');
});
Route::get('/institution-todo', function () {
    return view('dashboard.institution.institution-todo');
});
Route::get('/institution-notes', function () {
    return view('dashboard.institution.institution-notes');
});

Route::get('/institution-current-session-courses', function () {
    return view('dashboard.institution.institution-current-session-courses');
});
Route::get('/institution-add-new-courses', function () {
    return view('dashboard.institution.institution-add-new-courses');
});
Route::get('/institution-faculty-assign', function () {
    return view('dashboard.institution.institution-faculty-assign');
});
Route::get('/institution-request-courses', function () {
    return view('dashboard.institution.institution-request-courses');
});
Route::get('/institution-pre-advising-rules', function () {
    return view('dashboard.institution.institution-pre-advising-rules');
});
Route::get('/institution-advising-rules', function () {
    return view('dashboard.institution.institution-advising-rules');
});


Route::get('/institution-insider1', function () {
    return view('dashboard.institution.institution-insider1');
});
Route::get('/institution-insider2', function () {
    return view('dashboard.institution.institution-insider2');
});
Route::get('/institution-insider3', function () {
    return view('dashboard.institution.institution-insider3');
});
Route::get('/institution-insider4', function () {
    return view('dashboard.institution.institution-insider4');
});
Route::get('/institution-insider5', function () {
    return view('dashboard.institution.institution-insider5');
});
