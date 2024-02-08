<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Middleware\SetSanctumGuard;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/create',[AdminController::class, 'store']);
Route::post('/login',[AdminController::class, 'login']);


Route::get('Admin/teste', [AdminController::class,'verificarUsuarioLongado'])->middleware(['auth:sanctum', SetSanctumGuard::class, IsAuthenticated::class]);