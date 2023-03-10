<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "home"])->name("home");

Route::resource("comics",ComicController::class);


// Route::get("/comics", [ComicController::class, "index"])->name("comics.index");

// // Create - Rotta che mostrerĂ  una view con in form al suo interno dove poter inserire i dati
// Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");

// // Show - Rotta che legge un singolo elemento della tabella products
// Route::get("/comics/{comics}", [ComicController::class, "show"])->name("comics.show");

// // Store - Rotta che riceve i dati da un form e li salva nella tabella products
// Route::post("/comics", [ComicController::class, "store"])->name("comics.store");

// Route::get("/comics/{comics}/edit", [ComicController::class, "edit"])->name("comics.edit");

// Route::put("/comics/{comics}", [ComicController::class, "update"])->name("comics.update");

// Route::delete("/comics/{comics}", [ComicController::class, "destroy"])->name("comics.destroy");



