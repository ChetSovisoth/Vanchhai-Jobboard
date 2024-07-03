<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify'=> true]);

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/email/verify', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return view('auth.verify');
})->middleware('auth');

Route::get('/job/create', function () {
    return view('job.job_create');
})->name('job.create');

Route::group([
    'middleware' => AdminMiddleware::class
], function () {

    Route::post('job/create', [JobController::class,'store'])->name('job.create');

    Route::get('/admin_dashboard', [AdminController::class,'index'])->name('admin.index');

    Route::post('/admin/job/approve/{job}', [AdminController::class,'approve'])->name('admin.approve');

    Route::get('/admin/job/pending', [AdminController::class,'pending'])->name('admin.pending');

    Route::get('/admin/employer', [AdminController::class,'employer'])->name('admin.employer');

    Route::get('/admin/job/pending/{job}', [AdminController::class,'show'])->name('admin.pending.show');
});

