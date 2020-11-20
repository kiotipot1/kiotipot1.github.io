<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorAccountGroup1Controller;
use App\Http\Controllers\SubMajorAccountGroupController;
use App\Http\Controllers\GeneralLedgerAccountController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('major-account-group', MajorAccountGroup1Controller::class);
Route::resource('sub-major-account-group', SubMajorAccountGroupController::class);
Route::resource('general-ledger-account', GeneralLedgerAccountController::class);
