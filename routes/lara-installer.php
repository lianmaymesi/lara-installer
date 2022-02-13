<?php

use Lianmaymesi\LaraInstaller\Http\Controllers\AccountController;
use Lianmaymesi\LaraInstaller\Http\Controllers\WelcomeController;
use Lianmaymesi\LaraInstaller\Http\Controllers\DatabaseController;
use Lianmaymesi\LaraInstaller\Http\Controllers\RequirementController;

Route::name('li.')->middleware(['web', 'lara-installer'])->group(function () {
    Route::get('/install', [WelcomeController::class, 'index'])->name('index');
    Route::get('/requirments', [RequirementController::class, 'index'])->name('requirement');
    Route::get('/database', [DatabaseController::class, 'index'])->name('database');
    Route::post('/save-database', [DatabaseController::class, 'save'])->name('save.database');
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::post('/save-account', [AccountController::class, 'save'])->name('save.account');
});
