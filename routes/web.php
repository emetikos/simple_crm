<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/companies', [CompanyController::class, 'index'])->name('companies');
    Route::get('/dashboard/add-company', [CompanyController::class, 'create'])->name('add-company');
    Route::post('/dashboard/add-company', [CompanyController::class, 'store'])->name('store-company');

    Route::get('/dashboard/employees', [EmployeeController::class, 'index'])->name('employees');
    Route::get('/dashboard/add-employee', [EmployeeController::class, 'create'])->name('add-employee');
    Route::post('/dashboard/add-employee', [EmployeeController::class, 'store'])->name('store-employee');



});
