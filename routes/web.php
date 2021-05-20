<?php

use App\Http\Controllers\Back\SettingsController;
use App\Http\Controllers\IndexController;
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

Route::name('admin.')->prefix('/admin')->group(function(){
    Route::post('/general-settings', [SettingsController::class, 'logoFaviconUpdate'])->name('logoandfavicon');
    Route::get('/panel', [IndexController::class, 'index'])->name('index');
    Route::get('/general-settings', [SettingsController::class, 'general'])->name('generalsettings');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
