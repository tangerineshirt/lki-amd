<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\LeaderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// logout 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//mengatur halaman divisi untuk guest
Route::get('/divisi', [DivisionController::class, 'divisi'])->name('divisi');
Route::get('/divisi/{division}', [DivisionController::class, 'showDivision'])->name('show.division');

//mengatur halaman visi misi untuk guest
Route::get('/visi', [DivisionController::class, 'visi'])->name('visi');
Route::get('/misi', [DivisionController::class, 'misi'])->name('misi');

//mengatur halaman proker untuk guest
Route::get('/proker', [ProkerController::class, 'proker'])->name('proker');
Route::get('/proker/{proker}', [ProkerController::class, 'showProker'])->name('show.Proker');

//mengatur halaman pengurus untuk guest
Route::get('/pengurus', [LeaderController::class, 'pengurus'])->name('pengurus');
Route::get('/pengurus/{leader}', [LeaderController::class, 'showLeader'])->name('show.leader');

//mengatur login admin untuk guest
Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/admin', 'showAdmin')->name('show.Admin');
    Route::post('/admin', 'admin')->name('admin');
});

//mengatur halaman tambah divisi untuk admin
Route::middleware('auth')->controller(DivisionController::class)->group(function(){
    Route::get('/addDivision', 'showAddDivision')->name('show.addDivision');
    Route::post('/addDivision', 'addDivision')->name('addDivision');
    Route::delete('/addDivision/{division}', 'deleteDivision')->name('delete.division');
});

//mengatur halaman tambah proker untuk admin
Route::middleware('auth')->controller(ProkerController::class)->group(function(){
    Route::get('/addProker', 'showAddProker')->name('show.addProker');
    Route::post('/addProker', 'addProker')->name('addProker');
    Route::delete('/addProker/{proker}', 'deleteProker')->name('delete.proker');
});

//mengatur halaman tambah pengurus untuk admin
Route::middleware('auth')->controller(LeaderController::class)->group(function(){
    Route::get('/addLeader', 'showAddLeader')->name('show.addLeader');
    Route::post('/addLeader', 'addLeader')->name('addLeader');
    Route::delete('/addLeader/{leader}', 'deleteLeader')->name('delete.leader');
});