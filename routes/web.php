<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeesController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});


/*
|--------------------------------------------------------------------------
| Fee Controllers - Fees to be paid by each member category
|--------------------------------------------------------------------------
*/
Route::resource('/admin/fees', FeesController::class);

/*
|--------------------------------------------------------------------------
| Contact Controllers - member contact details
|--------------------------------------------------------------------------
*/
Route::get('/admin/contact', [ContactController::class, 'index']);
Route::get('/admin/contact/{user}/create', [ContactController::class, 'create']);
Route::post('/admin/contact/{user}/store', [ContactController::class, 'store']);
Route::get('/admin/contact/{contact}/show', [ContactController::class, 'show']);
Route::get('/admin/contact/{contact}/edit', [ContactController::class, 'edit']);
Route::patch('/admin/contact/{contact}/update', [ContactController::class, 'update']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
