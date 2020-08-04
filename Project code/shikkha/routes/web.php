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
