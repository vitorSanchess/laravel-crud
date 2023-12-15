<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\GameControllerApi;
use App\Http\Controllers\Api\V1\MovieControllerApi;

Route::prefix('v1')->group(function () {
    Route::resource('/movies', MovieControllerApi::class);
    Route::resource('/games', GameControllerApi::class);
});
