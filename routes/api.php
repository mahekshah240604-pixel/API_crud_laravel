<?php

use App\Http\Controllers\apicontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('studentpro',[apicontroller::class,'studentpro']);

Route::get('display',[apicontroller::class,'display']);

Route::delete('delete/{id}',[apicontroller::class,'delete']);

Route::get('edit/{id}',[apicontroller::class,'edit']);

Route::put('update',[apicontroller::class,'update']);

Route::post('employeepro',[apicontroller::class,'employeepro']);

Route::get('edisplay',[apicontroller::class,'edisplay']);

Route::delete('delete/{id}',[apicontroller::class,'edelete']);

Route::get('eedit/{id}',[apicontroller::class,'eedit']);

// Route::put('eupdate',[apicontroller::class,'eupdate']);
Route::match(['put', 'post'], '/eupdate', [apicontroller::class, 'eupdate']);


// Route::get('')