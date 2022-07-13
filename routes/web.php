<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home 
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/kontak-kami', [HomeController::class, 'kontak']);
Route::get('/preview-modul', [HomeController::class, 'modul']);
Route::get('/request-demo', [HomeController::class, 'demo']);
Route::get('/download-company-profile', [HomeController::class, 'compro']);
Route::get('/sistem-informasi-manajemen-rs', [HomeController::class, 'simrs']);
Route::get('/simklinik-sistem-informasi-manajemen-klinik', [HomeController::class, 'simklinik']);
Route::get('/sistem-rekam-medis', [HomeController::class, 'sirem']);
Route::get('/telemedis', [HomeController::class, 'telemedis']);
Route::get('/aviat-ai', [HomeController::class, 'ai']);
Route::get('/kioska', [HomeController::class, 'kioska']);

// Auth

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');