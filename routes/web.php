<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/barangay', function () {
    return Inertia::render('Barangay');
})->name('barangay');;

Route::inertia('/barangays/{barangay_id}/announcements', 'AnnouncementComponent')
    ->name('announcement.index')
    ->middleware(['barangay.authorization']);

Route::get('/barangays', 'BarangayController@index')->name('barangays.index');
Route::get('/barangays/create', 'BarangayController@create')->name('barangays.create');
Route::post('/barangays', 'BarangayController@store')->name('barangays.store');

Route::get('/barangays/{barangay_id}/announcements/create', 'AnnouncementController@create');
Route::post('/barangays/{barangay_id}/announcements', 'AnnouncementController@store');
Route::get('/barangays/{barangay_id}/announcements/{announcement}/edit', 'AnnouncementController@edit');
Route::put('/barangays/{barangay_id}/announcements/{announcement}', 'AnnouncementController@update');
Route::delete('/barangays/{barangay_id}/announcements/{announcement}', 'AnnouncementController@destroy');



require __DIR__ . '/auth.php';
