<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'welcome'])->name('welcome');

//ini untuk login admin
Route::get('/login-admin', [LoginController::class, 'login'])->name('login');
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//ini middleware admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth.admin'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/table-user', [AdminController::class, 'table_user'])->name('table_user');
    Route::get('/table-report', [AdminController::class, 'table_report'])->name('table_report');

    //Routes Admin untuk mengelola data Film
    Route::get('/table-film', [FilmController::class, 'table_film'])->name('table-film');
    Route::get('/form-film', [FilmController::class, 'form_film'])->name('form-film');
    Route::post('/proses-post-film', [FilmController::class, 'proses_post_film'])->name('proses-post-film');
    Route::get('/form-edit-film/{id}', [FilmController::class, 'form_edit_film'])->name('form-edit-film');
    Route::put('/proses-update-film/{id}', [FilmController::class, 'proses_update_film'])->name('proses-update-film');
    Route::delete('/proses-delete-film/{id}', [FilmController::class, 'proses_delete_film'])->name('proses-delete-film');
});

//ini untuk login user dan register user
Route::get('/login-user', [LoginController::class, 'login_user'])->name('login-user');
Route::post('/login-proses-user', [LoginController::class, 'login_proses_user'])->name('login-proses-user');
Route::get('/logout-user', [LoginController::class, 'logout_user'])->name('logout-user');

//ini middleware untuk user
Route::group(['prefix' => 'user', 'middleware' => ['auth.user'], 'as' => 'user.'], function () {
    Route::get('/result-perbandingan', [UserController::class, 'result_perbandingan'])->name('result');
});
