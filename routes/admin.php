<?php

use App\Http\Controllers\dashboard\Admin_panel_settings_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\ThemeController;

// ✅ للمشرف المسجل دخوله
Route::middleware('auth:admin')->group(function () {
    Route::get('/', ThemeController::class)->name('index');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    
    // ✅ الأعدادات العامة
    Route::group(['prefix'=>'settings'],function(){
        Route::get('setting', [Admin_panel_settings_Controller::class,'index'])->name('setting.index');
        Route::get('Shipping_methods/{type}', [Admin_panel_settings_Controller::class,'editshipping'])->name('setting.editshipping');
        Route::put('Shipping_methods/{id}', [Admin_panel_settings_Controller::class,'updateshipping'])->name('setting.updateshipping');
    }); // ← ✅ قفلنا مجموعة settings

}); // ← ✅ قفلنا مجموعة middleware

// ✅ لصفحة تسجيل الدخول للمشرف (لو مش مسجل)
Route::middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'postlogin'])->name('post.login');
});
