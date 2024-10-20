<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::get('/',[UserController::class,'index'])->name('index');
Route::any('/register',[UserController::class,'register'])->name('register');
Route::any('/login',[UserController::class,'login'])->name('login');
Route::any('/home',[UserController::class,'home'])->name('home');
Route::any('/ajouter',[ContactController::class,'ajouter'])->name('ajouter');
Route::any('/modifier/{contact}', [ContactController::class, 'modifier'])->name('modifier');
Route::any('/supprimer/{contact}', [ContactController::class, 'supprimer'])->name('supprimer');
