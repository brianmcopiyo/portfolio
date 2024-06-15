<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('error', function () {
    return view('error');
})->name('error');

Route::get('success', function () {
    return view('success');
})->name('success');

Route::post('create', [JobController::class, 'create'])->name('create');

Route::get('{any}', function () {
    // Redirect to the error page
    return redirect('error');
})->where('any', '.*');
