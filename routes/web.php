<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sijapi;

Route::get('/', [sijapi::class, 'index']);