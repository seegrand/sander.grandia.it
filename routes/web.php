<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MigrationMusicController;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/sander-grandia.vcf', [Controller::class, 'contactFile'])->name('contact_file');

Route::get('/sound-of-forced-movement', [MigrationMusicController::class, 'index'])->name('sound-of-forced-movement');
