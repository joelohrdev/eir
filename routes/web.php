<?php

use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/student/{student:id}/writing-sample-one', [StudentController::class, 'sampleOne'])
    ->middleware(['auth'])
    ->name('student.sampleOne');

Route::get('/student/{student:id}/writing-sample-two', [StudentController::class, 'sampleTwo'])
    ->middleware(['auth'])
    ->name('student.sampleTwo');

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::get('/full-import', [ImportController::class, 'fullImport'])->name('full-import');

require __DIR__.'/auth.php';
