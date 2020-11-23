<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

//Accounting Master Records Routes
Route::middleware(['auth:sanctum', 'verified'])->get('/Accounting/MasterRecords/chartofaccounts', function () {
    return Inertia\Inertia::render('Accounting/MasterRecords/ChartOfAccounts');
})->name('chartofaccounts');

Route::middleware(['auth:sanctum', 'verified'])->get('/Accounting/MasterRecords/remittances', function () {
    return Inertia\Inertia::render('Accounting/MasterRecords/Remittances');
})->name('remittances');



//Budget Master Records

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/responsibility-centers', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/ResponsibilityCenter');
})->name('responsibility-centers');

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/fund-cluster-codes', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/FundClusterCodes');
})->name('fund-cluster-codes');

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/financing-source-codes', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/FinancingSourceCodes');
})->name('financing-source-codes');

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/authorization-codes', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/AuthorizationCodes');
})->name('authorization-codes');

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/fund-category&classification-codes', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/FundCategory&ClassificationCodes');
})->name('fund-category&classification-codes');

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/project-codes', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/ProjectCodes');
})->name('project-codes');

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/allotment-classes-of-expenses', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/AllotmentClassesOfExpenses');
})->name('allotment-classes-of-expenses');

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/program-codes', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/ProgramCodes');
})->name('program-codes');

Route::middleware(['auth:sanctum', 'verified'])->get('/Budget/MasterRecords/MasterRecordsfund-source', function () {
    return Inertia\Inertia::render('Budget/MasterRecords/FundSource');
})->name('fund-source');



