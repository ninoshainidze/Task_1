<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\AdController;




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/addapartment', [ApartmentController::class, 'insert']);
Route::post('/updateapartment', [ApartmentController::class, 'update']);
Route::post('/deleteapartment', [ApartmentController::class, 'delete']);


// Auth::routes();

Auth::routes(['register' => true]);

