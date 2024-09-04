<?php

use App\Http\Controllers\ChiSiamoController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name("homepage");
Route::get("/chiSiamo", [ChiSiamoController::class, 'chiSiamo'])->name('chiSiamo');
Route::get("/servizi", [PublicController::class, 'servizi'])->name('servizi');
Route::get("/chiSiamo/dettagli/{detail}", [ChiSiamoController::class, "dettaglio"])->name('person.detail');
