<?php

use App\Http\Controllers\apicontroller;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\studentcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('student',[studentcontroller::class,'student']);

Route::get('display',[studentcontroller::class,'display']);

Route::delete('delete/{id}',[studentcontroller::class,'delete']);

Route::get('edit/{id}',[studentcontroller::class,'edit']);

Route::put('update',[studentcontroller::class,'update']);

Route::get('employee',[employeecontroller::class,'employee']);

Route::get('edisplay',[employeecontroller::class,'edisplay']);

Route::delete('delete/{id}',[employeecontroller::class,'delete']);

Route::get('eedit/{id}',[employeecontroller::class,'edit']);

Route::put('eupdate',[employeecontroller::class,'eupdate']);