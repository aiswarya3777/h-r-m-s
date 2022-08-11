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
Route::view('client_list','client_list')->name('client');
Route::view('add_client','add_client')->name('add_client');
Route::view('client_profile','client_profile')->name('client_profile');
Route::view('create_team','create_team')->name('create_team');
Route::view('salary','salary')->name('salary');
Route::view('salary_slip','salary_slip')->name('salary_slip');
//salary add




//Employee
Route::view('employee_login','employee_login')->name('employee_login');
Route::view('employee_dashboard','employee_dashboard')->name('employee_dashboard');
Route::view('employee_profile','employee_profile')->name('employee_profile');
Route::view('employee_layout','employee_layout')->name('employee_layout');
Route::view('employee_leave','employee_leave')->name('employee_leave');
Route::view('employee_attendance','employee_attendance')->name('employee_attendance');
Route::view('timesheet','timesheet')->name('timesheet');
Route::view('employee_leave_apply','employee_leave_apply')->name('employee_leave_apply');

//profile
//working projects
//attendance
//approved
//declined
//payslip(print,pdf-converter,csv-file-converter)






