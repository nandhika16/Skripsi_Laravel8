<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AlgoritmaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostHotelController;
use App\Http\Controllers\DashboardPostIbadahController;
use App\Http\Controllers\DashboardPostWisataController;
use App\Http\Controllers\DashboardPostSouvenirController;

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
    return view ('user.home', [
        "title" => "Home"
    ]);
});

// Route::post('/', [AlgoritmaController::class, 'store']);



Route::get('/login', function () {
    return view ('login', [
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view ('register', [
        "title" => "Register"
    ]);
});

Route::get('/about', function () {
    return view ('user.about', [
        "title" => "About"
    ]);
});

Route::get('/login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

// Dashboard Admin
Route::get('/dashboard', function() {
    return view('Dashboard.index');
})->middleware('auth');
// Route::get('/dasboard', function() {
//     return view('Dashboard.index');
// })->middleware('auth');

// Menampilkan Data di Home
// Route::post('/hasil',[AlgoritmaController::class, 'store']);
Route::post('/hasil',[AlgoritmaController::class, 'storetempat']);
// Route::post('/hasil',[GoogleMapsServiceProvider::class, 'providers']);


Route::get('/hasil',[AlgoritmaController::class, 'hierarchicalClustering']);

// Dashboard Admin
// Route::get('/dashboard/index',[DashboardController::class, 'showCalender']);

// Hotel
Route::get('/dashboard/hotel',[DashboardPostHotelController::class, 'index'])->middleware('auth');
Route::post('/dashboard/hotel',[DashboardPostHotelController::class, 'store']);
Route::get('/dashboard/hotel/create',[DashboardPostHotelController::class, 'create']);
Route::get('/dashboard/hotel/{id}/edit',[DashboardPostHotelController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/hotel/{id}',[DashboardPostHotelController::class, 'update'])->middleware('auth');
// Route::resource('/dashboard/hotel/edit', DashboardPostHotelController::class)
//     ->middleware('auth')
//     ->only(['edit','update']);
Route::delete('/dashboard/hotel/{id}',[DashboardPostHotelController::class, 'destroy'])->middleware('auth');

// Wisata
Route::resource('/dashboard/wisata', DashboardPostWisataController::class)->middleware('auth');
Route::post('/dashboard/wisata',[DashboardPostWisataController::class, 'store']);
Route::get('/dashboard/wisata/create',[DashboardPostWisataController::class, 'create']);
Route::delete('/dashboard/wisata/{id}',[DashboardPostWisataController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/wisata/{id}/edit',[DashboardPostWisataController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/wisata/{id}',[DashboardPostWisataController::class, 'update'])->middleware('auth');

// Souvenir
Route::get('/dashboard/souvenir',[DashboardPostSouvenirController::class, 'index'])->middleware('auth');
Route::post('/dashboard/souvenir',[DashboardPostSouvenirController::class, 'store']);
Route::get('/dashboard/souvenir/create',[DashboardPostSouvenirController::class, 'create']);
Route::delete('/dashboard/souvenir/{id}',[DashboardPostSouvenirController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/souvenir/{id}/edit',[DashboardPostSouvenirController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/souvenir/{id}',[DashboardPostSouvenirController::class, 'update'])->middleware('auth');


// Ibadah
Route::get('/dashboard/ibadah',[DashboardPostIbadahController::class, 'index'])->middleware('auth');
Route::post('/dashboard/ibadah',[DashboardPostIbadahController::class, 'store']);
Route::get('/dashboard/ibadah/create',[DashboardPostIbadahController::class, 'create']);
Route::delete('/dashboard/ibadah/{id}',[DashboardPostIbadahController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/ibadah/{id}/edit',[DashboardPostIbadahController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/ibadah/{id}',[DashboardPostIbadahController::class, 'update'])->middleware('auth');

Route::get('get-lokasi',[AlgoritmaController::class, 'getLokasi']);
