<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\TrackController;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/contact-us', function () {
//     return view('contact-us');
// });

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/ads.txt', function () {
    return response()->file(public_path('ads.txt'));
});

Route::get('/getapk', function () {
    $filePath = public_path('paksimtracker.apk');
    $fileName = 'paksimtracker.apk'; // The name you want the downloaded file to have.
    return response()->download($filePath, $fileName);
});

// Route::get('/track', function () {
//     return view('track');
// });

Route::post('/send-email', [ContactController::class, 'sendEmail']);
// Route::get('/track', [TrackController::class, 'showTrackPage'])->name('track');
// Route::get('/track', [TrackController::class, 'showTrackPage'])->name('track'); // Define your existing route

// Route::get('/search', [TrackController::class, 'search'])->name('track.search'); // Define the search route

// Route::get('/track', [TrackController::class, 'showTrackPage'])->name('track'); // Existing route

// Route::get('/search', [TrackController::class, 'search'])->name('track.search'); // Search route
// Route::get('/track', [TrackController::class, 'showTrackPage'])->name('track');
// Route::get('/track/search', [TrackController::class, 'search'])->name('track.search');
Route::get('/track', [TrackController::class, 'showTrackPage'])->name('track');
Route::get('/track/search', [TrackController::class, 'search'])->name('track.search');
// Route::get('/mobile', [MobileController::class, 'index])->query(;
