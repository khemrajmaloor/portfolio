<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('frontend.index');
});


Route::post('/contact/send', [EmailController::class, 'send'])->name('contact.send');