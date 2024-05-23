<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// stagiaire public user routes
Route::prefix('stagiaire')->controller(UserController::class)->group(function () {
    // views
    Route::get('/inscription', 'inscriptionView')->name('stagiaire.inscription.v');
    Route::get('/login', 'loginView')->name('stagiaire.login.v');
    Route::get('/bac-aupload', 'bacUploadView')->name('stagiaire.upload.v');
    // actions
    Route::post('/inscription', 'inscription')->name('stagiaire.inscription.a');
    Route::post('/login', 'login')->name('stagiaire.login.a');
    Route::post('/bac-aupload', 'bacUpload')->name('stagiaire.upload.a');
});

// stagiaire private user routes
Route::prefix('stagiaire')->controller(UserController::class)->group(function () {
    // views
    Route::get('/check-status', 'checkView')->name('stagiaire.check.v');
    // actions
    Route::get('/logout', 'logout')->name('stagiaire.logout.a');
});

// admin private routes
Route::prefix('admin')->controller(AdminController::class)->group(function () {
    // views
    Route::get('/login', 'loginView')->name('admin.login.v');
    Route::get('/dashboard', 'dashboardView')->name('admin.dashboard.v');
    Route::get('/applications', 'applicationsView')->name('admin.applications.v');
    Route::get('/stagiaires', 'stagiairesView')->name('admin.stagiaires.v');
    // actions
    Route::post('/login', 'login')->name('admin.login.a');
    Route::get('/logout', 'logout')->name('admin.logout.v');
});