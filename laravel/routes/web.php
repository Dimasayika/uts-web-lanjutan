

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get("/about-me", function() {
    return "Nama Saya <b>Dimas ayika</b>";
});

Route::get("/Nim", function() {
    return "1811102441027";
});

Route::get("/Instagram", function() {
    return "dimasayika_</b>";
});

Route::get("/Twitter", function() {
    return "gapunya wkwk";
});

Route::get("/Kampus", function() {
    return "Universitas Muhammadiyah Kalimantan Timur";
});



Route::get("/testing-view", function() {
    return view("view-1");
});

Route::get("/testing-view2", function() {
    return view("view-2");
});

Route::get("/testing-view3", function() {
    return view("view-3");
});

Route::get("/testing-view4", function() {
    return view("view-4");
});

Route::get("/testing-view5", function() {
    return view("view-5");
});

Route::get("/testing-view5", function() {
    return view("view-5");
});

Route::get("/testing-view6", function() {
    return view("view-6");
});


use App\Http\Controllers\SatuController;
Route::get("/Satu/dimas 1", [SatuController::class,"satu"]);
Route::get("/Satu/dimas 2", [SatuController::class,"dua"]);
Route::get("/Satu/dimas 3", [SatuController::class,"tiga"]);

use App\Http\Controllers\DuaController;
Route::get("/Dua/dimas 4", [DuaController::class,"empat"]);
Route::get("/Dua/dimas 5", [DuaController::class,"lima"]);
Route::get("/Dua/dimas 6", [DuaController::class,"enam"]);

use App\Http\Controllers\BeritaController;
Route::get("/berita/add", [BeritaController::class,"add"]);
Route::post("/proses", [BeritaController::class, "pro"])->name("berita_proses");