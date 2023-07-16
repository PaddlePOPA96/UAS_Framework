<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurTeamController;

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Storage;

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

Route::middleware(['auth'])->group(function () {
    Route::resource('employees', EmployeeController::class);
    Route::get('profile', ProfileController::class)->name('profile');
    Route::get('download-file/{employeeId}', [EmployeeController::class, 'downloadFile'])->name('employees.downloadFile');
    Route::get('getEmployees', [EmployeeController::class, 'getData'])->name('employees.getData');
    Route::get('exportExcel', [EmployeeController::class, 'exportExcel'])->name('employees.exportExcel');
    Route::get('exportPdf', [EmployeeController::class, 'exportPdf'])->name('employees.exportPdf');
});

Route::view('/', 'home')->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/ourteam', OurTeamController::class)->name('ourteam');

Route::put('/data/{id}', [DataController::class, 'update'])->name('data.update');

Auth::routes();
