<?php

use App\Http\Controllers\CheckAuthController;
use App\Http\Controllers\MemberCategoryController;
use App\Http\Controllers\MemberCategoryFeesController;
use App\Http\Controllers\MemberContactController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberEmploymentController;
use App\Http\Controllers\MemberSubscriptionController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolePermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UsersController;
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
    $member_categories = \App\Models\MemberCategory::all();
    return view('index',compact('member_categories'));
});


/*
|--------------------------------------------------------------------------
| Fee Controllers - Fees to be paid by each member category
|--------------------------------------------------------------------------
*/
Route::resource('/admin/member_category_fees', MemberCategoryFeesController::class);

/*
|--------------------------------------------------------------------------
| Fee Controllers - Member Categories to be paid by each member category
|--------------------------------------------------------------------------
*/
Route::resource('/admin/member_categories', MemberCategoryController::class);

Route::resource('/admin/subscribers', SubscriberController::class);

Route::resource('/admin/users', UsersController::class);
Route::resource('/admin/roles', RolesController::class);
Route::resource('/admin/permissions', PermissionsController::class);

Route::post('/admin/{role}/role_permissions', [RolePermissionsController::class, 'store']);

/*Route::resource('/admin/subscriptions', 'Admin\SubscriptionsController');
*/

/*
|--------------------------------------------------------------------------
| Contact Controllers - member contact details
|--------------------------------------------------------------------------
*/
Route::get('/check-user', [CheckAuthController::class, 'user_has_member_account']);

Route::resource('/members', MemberController::class);

Route::resource('/members/subscriptions', MemberSubscriptionController::class);

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
