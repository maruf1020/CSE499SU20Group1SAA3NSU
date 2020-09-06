<?php

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

Route::get('/','loginController@index');
Route::Post('/login','loginController@loginApproval');

Route::get('/register', function () {
    return view('dashboard.register');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/attendence', function () {
    return view('dashboard.faculty.attendence');
});
Route::get('/stream', function () {
    return view('dashboard.student.stream');
});
Route::get('/assigned-course', function () {
    return view('dashboard.student.assigned-course');
});
Route::get('/class-time', function () {
    return view('dashboard.student.class-time');
});
Route::get('/class-work', function () {
    return view('dashboard.student.class-work');
});
Route::get('/course-resource', function () {
    return view('dashboard.student.course-resource');
});
Route::get('/course-resource-home', function () {
    return view('dashboard.student.course-resource-home');
});
Route::get('/attendence', function () {
    return view('dashboard.student.attendence-home');
});
Route::get('/attendence-internal', function () {
    return view('dashboard.student.attendence-internal');
});
Route::get('/faculty-evaluation', function () {
    return view('dashboard.student.faculty-evaluation-home');
});
Route::get('/faculty-evaluation-internal', function () {
    return view('dashboard.student.faculty-evaluation-internal');
});
Route::get('/results', function () {
    return view('dashboard.student.result');
});
Route::get('/notifications', function () {
    return view('dashboard.student.notifications');
});
Route::get('/message', function () {
    return view('dashboard.student.message');
});
Route::get('/course-mate', function () {
    return view('dashboard.student.course-mate');
});
Route::get('/course-mate-internal', function () {
    return view('dashboard.student.course-mate-internal');
});
Route::get('/friends-home', function () {
    return view('dashboard.student.friends-home');
});
Route::get('/add-friends', function () {
    return view('dashboard.student.add-friends');
});
Route::get('/all-friends', function () {
    return view('dashboard.student.all-friends');
});
Route::get('/friends-request', function () {
    return view('dashboard.student.friends-request');
});
Route::get('/calendar', function () {
    return view('dashboard.student.calendar');
});
Route::get('/todo', function () {
    return view('dashboard.student.todo');
});
Route::get('/notes', function () {
    return view('dashboard.student.notes');
});
Route::get('/offer-course', function () {
    return view('dashboard.student.offer-course');
});
Route::get('/pre-advising', function () {
    return view('dashboard.student.pre-advising');
});
Route::get('/advising', function () {
    return view('dashboard.student.advising');
});
Route::get('/request-course', function () {
    return view('dashboard.student.request-course');
});
Route::get('/stream-home', function () {
    return view('dashboard.student.stream-home');
});
Route::get('/class-work-view', function () {
    return view('dashboard.student.class-work-view');
});
Route::get('/exam', function () {
    return view('dashboard.student.exam');
});
Route::get('/change-password', function () {
    return view('dashboard.student.change-password');
});
Route::get('/recovery-password', function () {
    return view('dashboard.student.recovery-password');
});
Route::get('/recovery-password-send-mail', function () {
    return view('dashboard.student.recovery-password-send-mail');
});
Route::get('/personal-information', function () {
    return view('dashboard.student.personal-information');
});
Route::get('/personal-information', function () {
    return view('dashboard.student.personal-information');
});




// faculty route start
Route::get('/faculty-stream', function () {
    return view('dashboard.faculty.faculty-stream');
});
Route::get('/faculty-stream-home', function () {
    return view('dashboard.faculty.faculty-stream-home');
});
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
Route::get('/faculty-course-resource-home', function () {
    return view('dashboard.faculty.faculty-course-resource-home');
});
Route::get('/faculty-course-resource', function () {
    return view('dashboard.faculty.faculty-course-resource');
});
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
