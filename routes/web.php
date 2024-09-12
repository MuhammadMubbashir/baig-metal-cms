<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(WebsiteController::class ,)->group(function() {
    Route::prefix('/')->group(function() {
        Route::get('', 'index')->name('index');
        Route::get('who_we_are', 'about')->name('about');
        Route::get('quality_assurance', 'quality_assurance')->name('quality_assurance');
        Route::get('precision_machine', 'precision')->name('precision_machine');
        Route::get('testimonials', 'testimonials')->name('testimonials');
        Route::get('vision_mission', 'vision')->name('vision_mission');
        Route::get('services_facilities', 'services')->name('services');
        Route::get('certificate', 'certificate')->name('certificate');
        Route::get('engineering', 'engineering')->name('engineering');
        Route::get('quality_policy', 'quality')->name('quality');
        Route::get('customers', 'customers')->name('customers');
        Route::get('ceo_message', 'ceo')->name('ceo_message');
        Route::get('stamping', 'stamping')->name('stamping');
        Route::get('welding', 'welding')->name('welding');
        Route::get('gallery', 'gallery')->name('gallery');
        Route::get('contact', 'contact')->name('contact');
    });
});
