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

// Route::get('/', function () {
//     return view('welcome');
// });

//Admin
Route::view('/','admin_login');
Route::view('admin_dashboard','admin_homepage')->name('dashboard');
Route::view('add-employee','add_employee')->name('add_employee');
Route::view('profile','admin_profile')->name('admin_profile');
Route::view('project_detail','project_detail_page')->name('project_detail');
Route::view('add-project','add_project')->name('add_project');
Route::view('attendance','attendance')->name('attendance');
Route::view('leave_apply','leave_apply')->name('leave_apply');
Route::view('employee_list','employee_list')->name('employee_list');
Route::view('approved_list','approved_list')->name('approved_list');
Route::view('declined_list','leave_decline')->name('declined_list');



//Employee
Route::view('employee_leave','employee_leave');
Route::view('timesheet','timesheet')->name('timesheet');






