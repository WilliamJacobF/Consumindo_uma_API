<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

Route::get('/', [APIController::class, 'getTasks']);
