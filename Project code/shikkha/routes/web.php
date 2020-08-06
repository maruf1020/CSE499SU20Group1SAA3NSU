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

Route::get('/', function () {
    return view('dashboard.login');
});
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
