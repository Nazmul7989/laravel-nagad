<?php

use App\Http\Controllers\NagadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('nagad/pay',[NagadController::class,'pay'])->name('nagad.pay');
Route::get('nagad/callback', [NagadController::class,'callback']);
Route::get('nagad/refund/{paymentRefId}', [NagadController::class,'refund']);

