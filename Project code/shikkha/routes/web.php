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
