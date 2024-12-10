<?php

use App\Http\Controllers\LinkController;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('{link}', [LinkController::class,'link']);