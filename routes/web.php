<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeminarRegistrationController;

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


Route::get('/home', function () {
    return view('home');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/seminar-registration', [SeminarRegistrationController::class, 'showForm']);
Route::post('/seminar-registration', [SeminarRegistrationController::class, 'submitForm'])->name('submitForm');
Route::post('/get-registration-information', [SeminarRegistrationController::class, 'getRegistrationInformation'])
    ->name('get_registration_information');

    Route::get('seeinfo', [SeminarRegistrationController::class, 'seeinfo'])->name('seeinfo');
    Route::get('/seminar-registrations', [SeminarRegistrationController::class, 'getSeminarRegistrations'])->name('get_seminar_registrations');
    Route::resource('seminar', SeminarRegistrationController::class);

//xenon paystation package route
Route::post('payment-process',[PaymentController::class,'processPayment'])->name('payment.process');
Route::get('payment-verify',[PaymentController::class,'verifyPayment'])->name('payment.verify');

//paystation original route
Route::get('checkout',[CheckoutController::class,'checkout'])->name('checkout');
Route::get('store-transaction/{token}',[CheckoutController::class,'storeTransaction'])->name('store-transaction');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::resource('seminar', SeminarRegistrationController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
