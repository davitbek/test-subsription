<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SubmitController;

Route::post('submit', SubmitController::class);
