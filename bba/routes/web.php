<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index']);
Route::get('/Login', [LoginController::class, 'login']);
Route::get('/SignUp', [LoginController::class, 'login']);
Route::get('/Dashboard', [DashboardController::class, 'index']);