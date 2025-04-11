<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClaseController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('saludarficha',[ClaseController::class,'saludo']);

Route::get('numeropordos/{numero1}',[ClaseController::class,'pordos']);

Route::get('suma/{numero1}/{numero2}',[ClaseController::class,'suma']);


