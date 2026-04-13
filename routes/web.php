<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwirperController;

Route::get('/', [TwirperController::class,'index']);


