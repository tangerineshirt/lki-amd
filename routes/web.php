<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\LeaderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/divisi', [DivisionController::class, 'divisi'])->name('divisi');
Route::get('/visi', [DivisionController::class, 'visi'])->name('visi');
Route::get('/misi', [DivisionController::class, 'misi'])->name('misi');

Route::get('/admin', [AuthController::class, 'showAdmin'])->name('show.Admin');
Route::post('/admin', [AuthController::class, 'admin'])->name('admin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/divisi/{division}', [DivisionController::class, 'showDivision'])->name('show.division');
Route::get('/addDivision', [DivisionController::class, 'showAddDivision'])->name('show.addDivision');
Route::post('/addDivision', [DivisionController::class, 'addDivision'])->name('addDivision');

Route::get('/proker', [ProkerController::class, 'proker'])->name('proker');
Route::get('/proker/{proker}', [ProkerController::class, 'showProker'])->name('show.Proker');
Route::get('/addProker', [ProkerController::class, 'showAddProker'])->name('show.addProker');
Route::post('/addProker', [ProkerController::class, 'addProker'])->name('addProker');

Route::get('/pengurus', [LeaderController::class, 'pengurus'])->name('pengurus');
Route::get('/pengurus/{leader}', [LeaderController::class, 'showLeader'])->name('show.leader');
Route::get('/addLeader', [LeaderController::class, 'showAddLeader'])->name('show.addLeader');
Route::post('/addLeader', [LeaderController::class, 'addLeader'])->name('addLeader');
