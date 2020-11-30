<?php

use App\Http\Controllers\AllotmentClassController;
use App\Http\Controllers\AuthorizationCodeController;
use App\Http\Controllers\ChartOfAccountsController;
use App\Http\Controllers\FinanceSourceCodeController;
use App\Http\Controllers\FundCategoryController;
use App\Http\Controllers\FundClusterCodeController;
use App\Http\Controllers\FundSourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorAccountGroup1Controller;
use App\Http\Controllers\SubMajorAccountGroupController;
use App\Http\Controllers\GeneralLedgerAccountController;
use App\Http\Controllers\ProgramCodeController;
use App\Http\Controllers\ProjectCodeController;
use App\Http\Controllers\RemittanceController;
use App\Http\Controllers\SaroRecievedController;
use App\Http\Controllers\ChartExportController;

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
Route::resource('chart-of-account', ChartOfAccountsController::class);
Route::resource('remittance', RemittanceController::class);
Route::resource('fund-cluster-code', FundClusterCodeController::class);

Route::resource('finance-source-code', FinanceSourceCodeController::class);

Route::resource('authorization-code', AuthorizationCodeController::class);

Route::resource('fund-category-cluster-code', FundCategoryController::class);

Route::resource('project-code', ProjectCodeController::class);

Route::resource('allotment-class', AllotmentClassController::class);


Route::resource('program-code', ProgramCodeController::class);

Route::resource('fund-source', FundSourceController::class);

Route::resource('saro-recieve', SaroRecievedController::class);



// Route::get('export', 'App\Http\Controllers\ChartOfAccountExport@export');
Route::get('/export', [ChartOfAccountsController::class, 'export']);