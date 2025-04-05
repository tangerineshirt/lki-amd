<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/divisi', [DivisionController::class, 'divisi'])->name('divisi');
Route::get('/proker', [DivisionController::class, 'proker'])->name('proker');
Route::get('/visi', [DivisionController::class, 'visi'])->name('visi');
Route::get('/misi', [DivisionController::class, 'misi'])->name('misi');
Route::get('/pengurus', [DivisionController::class, 'pengurus'])->name('pengurus');


Route::get('/admin', [AuthController::class, 'showAdmin'])->name('show.Admin');
Route::post('/admin', [AuthController::class, 'admin'])->name('admin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/divisi/{division}', [DivisionController::class, 'showDivision'])->name('show.division');
Route::get('/addDivision', [DivisionController::class, 'showAddDivision'])->name('show.addDivision');
Route::post('/addDivision', [DivisionController::class, 'addDivision'])->name('addDivision');
