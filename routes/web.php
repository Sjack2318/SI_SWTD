<?php

use App\Http\Controllers\BachillerController;
use App\Http\Controllers\DescargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\RegularizacionController;
use App\Http\Controllers\TesisController;
use App\Http\Controllers\TituloController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome')->name('inicio');
Route::view('login', 'login')->name('login')->middleware('guest');
Route::view('home', 'home')->name('home')->middleware('auth');

Route::post('login', function () {

    $credentials = request()->only('name', 'password');

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('home');
    }

    return redirect('login');
});

Route::post('logout', [LoginController::class, 'logout']);

Route::resource('bachiller', BachillerController::class)->except('create', 'edit', 'update', 'show');
Route::resource('matricula', MatriculaController::class)->except('create', 'edit', 'update', 'show');
Route::resource('regularizacion', RegularizacionController::class)->except('create', 'edit', 'update', 'show');
Route::resource('tesis', TesisController::class)->except('create', 'edit', 'update', 'show');
Route::resource('titulo', TituloController::class)->except('create', 'edit', 'update', 'show');
Route::resource('descarga', DescargaController::class)->except('edit', 'update', 'show');

Route::get('descarga/descargar/{descarga}', [DescargaController::class, 'download'])->name('descarga.download');