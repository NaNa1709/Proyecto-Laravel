<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/prenda/create", [PrendaController::class, "create"])->name("prenda.create");
// Route::post("/prenda", [PrendaController::class, "store"])->name("prenda.store");
Route::resource("prenda", PrendaController::class);
