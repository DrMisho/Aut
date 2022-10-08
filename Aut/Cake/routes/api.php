<?php

use Illuminate\Support\Facades\Route;
use Aut\Cake\Controllers\CakeController;

Route::get('api/cakes', [CakeController::class , 'index']);
