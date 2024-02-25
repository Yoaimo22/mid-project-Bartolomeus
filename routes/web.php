<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home-1', [HomeController::class, 'home'])->name('rumah');

Route::get('/create_karyawan', [KaryawanController::class, 'redirectToCreateKaryawanPage']);
Route::post('/post-create_karyawan', [KaryawanController::class, 'create_karyawan']);
//update
Route::get('/update_karyawan_page/{id}', [KaryawanController::class, 'updateKaryawanPage']);

Route::post('/update_karyawan/{id}', [KaryawanController::class, 'updateKaryawan']);

Route::post('/delete_karyawan/{id}', [KaryawanController::class, 'deleteKaryawan']);