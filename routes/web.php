<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['cache.headers', 'admin.route'])->group(function () {
    View::share('inAdminRouteGroup', false);
    Route::get('/', [Controller::class, 'index'])->name('index');
    Route::get('imprint', [Controller::class, 'imprint'])->name('imprint');
    Route::get('data-privacy', [Controller::class, 'data_privacy'])->name('data_privacy');

    // Set the variable to true inside the admin route group
    Route::prefix('admin')->group(function () {
        View::share('inAdminRouteGroup', true);
        Route::get('/', [AuthController::class, 'login'])->name('login');
        Route::post('/', [AuthController::class, 'authenticate'])->name('authenticate');

        Route::middleware('auth')->group(function () {
            Route::post('logout', [AuthController::class, 'logout'])->name('logout');
            Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        });
    });
});
