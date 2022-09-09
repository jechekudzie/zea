<?php

use App\Http\Controllers\MemberCategoryFeeController;
use App\Http\Controllers\MemberContactController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\MemberEmploymentController;
use App\Http\Controllers\MemberMemberContactController;
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
Route::resource('/member_category_fees', MemberCategoryFeeController::class);

/*
|--------------------------------------------------------------------------
| Contact Controllers - member contact details
|--------------------------------------------------------------------------
*/
Route::get('/members/contact', [MemberContactController::class, 'index']);
Route::get('/members/contact/{member}/create', [MemberContactController::class, 'create']);
Route::post('/members/contact/{member}/store', [MemberContactController::class, 'store']);
Route::get('/members/contact/{member_contact}/show', [MemberContactController::class, 'show']);
Route::get('/members/contact/{member_contact}/edit', [MemberContactController::class, 'edit']);
Route::patch('/members/contact/{member_contact}/update', [MemberContactController::class, 'update']);
Route::delete('/members/contact/{member_contact}/destroy', [MemberContactController::class, 'destroy']);


Route::get('/members/employment', [MemberEmploymentController::class, 'index']);
Route::get('/members/employment/{member}/create', [MemberEmploymentController::class, 'create']);
Route::post('/members/employment/{member}/store', [MemberEmploymentController::class, 'store']);
Route::get('/members/employment/{member_employment}/show', [MemberEmploymentController::class, 'show']);
Route::get('/members/employment/{member_employment}/edit', [MemberEmploymentController::class, 'edit']);
Route::patch('/members/employment/{member_employment}/update', [MemberEmploymentController::class, 'update']);
Route::delete('/members/employment/{member_employment}/destroy', [MemberEmploymentController::class, 'destroy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
