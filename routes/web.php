<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Models\Expense;

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



    Route::get('/dashboard', [ClientController::class, 'index'])->name('dashboard');
    Route::get('/expenses/create', [ClientController::class, 'create'])->name('expenses.create');
    Route::post('/clients/store', [ClientController::class, 'store'])->name('expenses.store');
    
    Route::get('/expenses/edit/{expense}', [ClientController::class, 'edit'])->name('expenses.edit');
    Route::put('/expenses/{expense}', [ClientController::class, 'update'])->name('expenses.update');
    Route::delete('/expenses/{expense}', [ClientController::class, 'destroy']); 


