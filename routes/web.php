<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return redirect()->route('evenements.index');
});

Route::resource('evenements', EvenementController::class);
