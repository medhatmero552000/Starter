<?php

use App\Http\Controllers\dashboard\Admin_panel_settings_Controller;
use App\Http\Controllers\Dashboard\AdminProfileController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\Dashboard\StageController;
use App\Http\Controllers\Dashboard\ThemeController;
use Illuminate\Support\Facades\Auth;

// ✅ أولاً: تحويل من "/" إلى "/admin" أو "/admin/login"
Route::get('/', function () {
    if (Auth::guard('admin')->check()) {
        return redirect()->route('admin.index');
    }
    return redirect()->route('admin.login');
});

// ✅ راوتات المشرف المسجل دخوله
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/', ThemeController::class)->name('index');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    /* ------------------------------ Stages Routes ----------------------------- */
    Route::resource('stages', StageController::class)->names([
        'index' => 'stages.index',
        'create' => 'stages.create',
        'store' => 'stages.store',
        'show' => 'stages.show',
        'edit' => 'stages.edit',
        'update' => 'stages.update',
        'destroy' => 'stages.destroy'
    ]);
});



// ✅ راوتات تسجيل الدخول للمشرف
Route::middleware('guest:admin')->prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'postlogin'])->name('post.login');
});
