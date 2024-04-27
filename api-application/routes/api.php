<?php

use Domain\Costumer\Actions\AddCostumerAction;
use Domain\Costumer\Actions\UpdateCostumerAction;
use Domain\Shared\Actions\CheckAuthenticationAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::put('costumer', UpdateCostumerAction::class)->middleware('auth:sanctum');

Route::post('costumer', AddCostumerAction::class);
Route::post('auth/login', CheckAuthenticationAction::class);
