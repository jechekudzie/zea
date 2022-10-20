<?php
/*header('Content-type: text/x-vcard');*/

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckAuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberCategoryController;
use App\Http\Controllers\MemberCategoryFeesController;
use App\Http\Controllers\MemberContactController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberEmploymentController;
use App\Http\Controllers\MemberSubscriptionController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PermissionsController;
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

Route::get('/certificate', function () {

    $qr_code = QrCode::size(75)->generate('http://zea/1');
    $html = '<img src="data:image/svg+xml;base64,' . base64_encode($qr_code) . '"  width="50" height="50" />';
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML(view('certificate')
        ->with('html', $html))
        ->setPaper('a5', 'portrait');
    return $pdf->stream('Lineth2022.pdf');

});

Route::get('/qr', function () {

    $firstName = 'John';
    $lastName = 'Doe';
    $title = 'Mr.';
    $email = 'john.doe@example.com';

    // Addresses
    $homeAddress = [
        'type' => 'home',
        'pref' => true,
        'street' => '123 my street st',
        'city' => 'My Beautiful Town',
        'state' => 'LV',
        'country' => 'Neverland',
        'zip' => '12345-678'
    ];
    $wordAddress = [
        'type' => 'work',
        'pref' => false,
        'street' => '123 my work street st',
        'city' => 'My Dreadful Town',
        'state' => 'LV',
        'country' => 'Hell',
        'zip' => '12345-678'
    ];

    $addresses = [$homeAddress, $wordAddress];

    // Phones
    $workPhone = [
        'type' => 'work',
        'number' => '001 555-1234',
        'cellPhone' => false
    ];
    $homePhone = [
        'type' => 'home',
        'number' => '001 555-4321',
        'cellPhone' => false
    ];
    $cellPhone = [
        'type' => 'work',
        'number' => '001 9999-8888',
        'cellPhone' => true
    ];

    $phones = [$workPhone, $homePhone, $cellPhone];

    return QrCode::size(400)->encoding('UTF-8')->generate("BEGIN:VCARD\nVERSION:3.0\nN:Nandigolo; Nakambale\nURL:http://futureafricainternational.org/\nEMAIL:nandi@futureafricainternational.org\nTEL;TYPE=work,pref:+264813749396\nEND:VCARD");
    /*$qr_code = QrCode::vCard($firstName, $lastName, $title, $email, $addresses, $phones);
    $html = '<img src="data:image/svg+xml;base64,' . base64_encode($qr_code) . '"  width="100" height="100" />';

    echo $html;*/
});

Route::get('/check', function () {

    return view('mail.message');

});

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
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:Admin']], function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');

        Route::resource('/admin/member_category_fees', MemberCategoryFeesController::class);

        Route::resource('/admin/member_categories', MemberCategoryController::class);

        Route::resource('/admin/subscribers', SubscriberController::class);

        Route::resource('/admin/users', UsersController::class);
        Route::resource('/admin/roles', RolesController::class);
        Route::resource('/admin/permissions', PermissionsController::class);
        Route::resource('/admin/messages', MessageController::class);

        Route::post('/admin/{role}/role_permissions', [RolePermissionsController::class, 'store']);

        Route::resource('/admin/subscriptions', 'Admin\SubscriptionsController');

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


Route::get('/members/subscriptions', [MemberSubscriptionController::class, 'index']);
Route::get('/members/subscriptions/{member}/create', [MemberSubscriptionController::class, 'create']);
Route::post('/members/subscriptions/{member}/store', [MemberSubscriptionController::class, 'store']);
Route::get('/members/subscriptions/{member_subscription}/show', [MemberSubscriptionController::class, 'show']);
Route::get('/members/subscriptions/{member_subscription}/edit', [MemberSubscriptionController::class, 'edit']);
Route::patch('/members/subscriptions/{member_subscription}/update', [MemberSubscriptionController::class, 'update']);
Route::delete('/members/subscriptions/{member_subscription}/destroy', [MemberSubscriptionController::class, 'destroy']);
Route::get('/members/subscriptions/{member_subscription}/check_payment', [MemberSubscriptionController::class, 'check_payment']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
