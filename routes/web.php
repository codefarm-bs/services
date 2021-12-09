<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', fn() => view('welcome'));
Route::get('payment', [PaymentController::class, 'store']);
