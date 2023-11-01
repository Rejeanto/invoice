<?php

use App\Http\Controllers\contohController;
use App\Http\Controllers\invoiceController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', [invoiceController::class, 'create']);


Route::get('/home', [invoiceController::class, 'create']);
Route::post('/welcome', [invoiceController::class, 'input']);

Route::get('/project_list', [invoiceController::class, 'list']);

// Route::get('/project_list', function () {
//     return view('project_list');
// });
// Route::controller(invoiceController::class)->group(function () {
//     Route::get('/', 'home');
// });
