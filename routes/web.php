<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');

Route::get('contacts/import', [ContactController::class, 'import'])->name('contacts.import');
Route::post('contacts/upload', [ContactController::class, 'upload'])->name('contacts.upload');
// Route::get('contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
// Route::put('contacts/{contact}/update', [ContactController::class, 'update'])->name('contacts.update');
Route::resource('contacts', ContactController::class);
