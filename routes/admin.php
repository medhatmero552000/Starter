<?php

use App\Http\Controllers\dashboard\Admin_panel_settings_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\ThemeController;

// ✅ للمشرف المسجل دخوله
Route::middleware('auth:admin')->group(function () {
    Route::get('/', ThemeController::class)->name('index');
    // ✅ الأعدادات العامة
      Route::get('settings', [Admin_panel_settings_Controller::class,'index'])->name('setting.index');
});

// ✅ لصفحة تسجيل الدخول للمشرف (لو مش مسجل)
Route::middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'postlogin'])->name('post.login');
});

