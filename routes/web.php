<?php
/*header('Content-type: text/x-vcard');*/

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CheckAuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberBeneficiaryController;
use App\Http\Controllers\MemberCategoryController;
use App\Http\Controllers\MemberCategoryFeesController;
use App\Http\Controllers\MemberContactController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberEmploymentController;
use App\Http\Controllers\MemberSubscriptionController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RolePermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\SiteController;


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
Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

});

Route::get('/members/member_certificate/{memberSubscription}', [CertificateController::class, 'generate_certificate']);


/*
|--------------------------------------------------------------------------
| Website front end controllers
|--------------------------------------------------------------------------
*/
Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/about_leadership', [SiteController::class, 'about_leadership']);
Route::get('/about_our_history', [SiteController::class, 'about_our_history']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/member_benefits', [SiteController::class, 'member_benefits']);
Route::get('/member_categories', [SiteController::class, 'member_categories']);
Route::get('/member_directories', [SiteController::class, 'member_directories']);

Route::get('/unsubscribe_confirmation/{subscriber}', [SubscriberController::class, 'unsubscribe_confirmation']);
Route::post('/unsubscribe/{subscriber}', [SubscriberController::class, 'unsubscribe']);
Route::get('subscribers/index', [SubscriberController::class, 'index']);
/*
|--------------------------------------------------------------------------
|Administration dashboard
|--------------------------------------------------------------------------
*/
Route::resource('/admin/subscribers', SubscriberController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:Admin']], function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');

        Route::resource('/admin/member_category_fees', MemberCategoryFeesController::class);

        Route::resource('/admin/member_categories', MemberCategoryController::class);

        Route::resource('/admin/messages', MessageController::class);

        Route::post('/admin/{role}/role_permissions', [RolePermissionsController::class, 'store']);

        Route::resource('/admin/subscriptions', 'Admin\SubscriptionsController');

        Route::resource('/admin/users', UsersController::class);
        Route::resource('/admin/roles', RolesController::class);
        Route::resource('/admin/permissions', PermissionsController::class);
        Route::resource('/admin/rate', RateController::class);
    });
});

/*
|--------------------------------------------------------------------------
|Contact dashboard
|--------------------------------------------------------------------------
*/
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('/send_email', [ContactController::class, 'store'])->name('send_email');
/*
|--------------------------------------------------------------------------
| Contact Controllers - member contact details
|--------------------------------------------------------------------------
*/
Route::get('/check_user', [CheckAuthController::class, 'user_has_member_account']);
Route::resource('/members', MemberController::class);
Route::post('/members/{member}/upgrade_downgrade_membership', [MemberController::class,'upgrade_downgrade_membership']);

Route::get('/members/institution/create', [MemberController::class, 'create_institution']);
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


Route::get('/members/subscriptions', [MemberSubscriptionController::class, 'index']);
Route::get('/members/subscriptions/{member}/create', [MemberSubscriptionController::class, 'create']);
Route::post('/members/subscriptions/{member}/payment_details', [MemberSubscriptionController::class, 'payment_details']);
Route::post('/members/subscriptions/{member}/submit_payment_details', [MemberSubscriptionController::class, 'submit_payment_details']);
Route::get('/members/subscriptions/{memberSubscription}/show', [MemberSubscriptionController::class, 'show']);
Route::post('/members/subscriptions/{memberSubscription}/verify_subscription', [MemberSubscriptionController::class, 'verify_subscription']);

Route::get('/members/institution_members', [MemberBeneficiaryController::class, 'index']);
Route::get('/members/institution_members/{member}/create', [MemberBeneficiaryController::class, 'create']);
Route::post('/members/institution_members/{member}/add_member', [MemberBeneficiaryController::class, 'add_member']);
Route::post('/members/institution_members/{member}/send_invite', [MemberBeneficiaryController::class, 'send_invite']);

Route::post('/members/subscriptions/{member}/paynow', [MemberSubscriptionController::class, 'paynow']);
Route::get('/members/subscriptions/{member_subscription}/check_payment', [MemberSubscriptionController::class, 'check_payment']);

Route::get('/members/subscriptions/{member_subscription}/show', [MemberSubscriptionController::class, 'show']);
Route::get('/members/subscriptions/{member_subscription}/edit', [MemberSubscriptionController::class, 'edit']);
Route::patch('/members/subscriptions/{member_subscription}/update', [MemberSubscriptionController::class, 'update']);
Route::delete('/members/subscriptions/{member_subscription}/destroy', [MemberSubscriptionController::class, 'destroy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
