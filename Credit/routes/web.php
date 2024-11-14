<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminEmpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('AdminDashboard');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/emp', [AdminEmpController::class, 'emp'])->name('admin.emp');
Route::get('/leave/tardiness', [LeaveController::class, 'tardiness'])->name('leave.tardiness');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');