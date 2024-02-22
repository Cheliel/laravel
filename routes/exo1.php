<?php

use App\Http\Controllers\{
    PokemonController,
    HomeController

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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('exo1/page/creation', [PokemonController::class, 'index'])->name('exo1.pageCreate');

Route::get('exo1/page/recap/{id}', [PokemonController::class, 'pageRecap'])->name('exo1.pageRecap');


Route::get('exo1/page/show/{id}', [PokemonController::class, 'show'])->name('exo1.show');

Route::get('exo1/page/listPokemon', [PokemonController::class, 'listPokemon'])->name('exo1.listPokemon');




Route::get('/exo1/index', [PokemonController::class, 'index'] )->name('exo1.index');

Route::post('/exo1/create', [PokemonController::class, 'create'])->name('exo1.create');

Route::put('/exo1/update/{id}', [PokemonController::class, 'update'])->name('exo1.update');

Route::put('/exo1/store/{id}', [PokemonController::class, 'store'])->name('exo1.store');

Route::delete('/exo1/delete/{id}', [PokemonController::class, 'delete'])->name('exo1.delete');

Route::post('/exo1/toJSON', [PokemonController::class, 'toJSON'])->name('exo1.toJSON');



// ------------------------------------------------------------- 


// Route::get('exo2/page/users', [testController::class, 'pageUsers']) ->name('exo2.pageUser');