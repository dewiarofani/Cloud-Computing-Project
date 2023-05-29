<?php

use App\Models\Agama;
use App\Http\Controllers\AgamaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SebaranUsiaController;
use App\Http\Controllers\PertumbuhanController;

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

//route view informasi.blade.php menampilkan page awal/home
Route::get('/', function () {
    return view('informasi', [
        "title" => "Informasi",
    ]);
});

//route view aboutus.blade.php menampilkan page pejabat surakarta
Route::get('/about-us', function () {
    return view('aboutus', [
        "title" => "About Us",
        "name" => "Ima Dewi Arofani",
        "image" => "foto ima.jpg"
    ]);
});

//route view visimisi.blade.php menampilkan page visi dan misi
Route::get('/visi-dan-misi', function(){
    return view('visimisi', [
        "title" => "Visi dan Misi"
    ]);
 });

//route view alamat.blade.php menampilkan page alamat dan kontak
Route::get('/alamat-dan-kontak', function(){
    return view('alamat', [
        "title" => "Alamat dan Kontak"
    ]);
});

//route AgamaController menampilkan page berdasarkan agama
Route::get('/berdasarkan-agama', [AgamaController::class, 'show']);

//route SebaranUsiaController menampilkan page berdasarkan sebaran usia dan jenis kelamin
Route::get('/berdasarkan-usia-dan-jenis-kelamin', [SebaranUsiaController::class, 'show']);

//route PertumbuhanController menampilkan page pertumbuhan penduduk
Route::get('/pertumbuhan-penduduk', [PertumbuhanController::class, 'show']);




