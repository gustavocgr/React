<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/bolinho',[HomeController::class,'teste']);

Route::get('/',[HomeController::class,'createUser']);
