<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// Importando CatFactsController
use App\Http\Controllers\CatFactsController;

Route::apiResource('cats', CatFactsController::class);

Route::apiResource('students', StudentsController::class);
