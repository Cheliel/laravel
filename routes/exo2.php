<?php

use App\Http\Controllers\{
    PokemonController,
    testController
};
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('exo2/page/users', [testController::class, 'pageUsers']) ->name('exo2.pageUser');





