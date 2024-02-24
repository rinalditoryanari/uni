<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('login');
});

Route::get('idk', [\App\Http\Controllers\idkController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('staf')->middleware('staf')->name('staf.')->group(function (){
    Route::get('dashboard', function () {
        return view('pages.index');
    })->name('dashboard');
});

Route::prefix('mhsw')->middleware('mhsw')->name('mhsw.')->group(function (){
    Route::get('dashboard', function () {
        return view('pages.index');
    })->name('dashboard');
});

Route::prefix('dosen')->middleware('dosen')->name('dosen.')->group(function (){
    Route::get('dashboard', function () {
        return view('pages.index');
    })->name('dashboard');
});

Route::prefix('asdos')->middleware('asdos')->name('asdos.')->group(function (){
    Route::get('dashboard', function () {
        return view('pages.index');
    })->name('dashboard');
});

//Dashboard
Route::get('dashboard-1', function () {
    return view('pages.index');
});
Route::get('dashboard-2', function () {
    return view('pages.index2');
});
Route::get('dashboard-3', function () {
    return view('pages.index3');
});

//Forms
Route::get('form-basic', function () {
    return view('pages.form-basic');
});
Route::get('advanced-components', function () {
    return view('pages.advanced-components');
});
Route::get('form-wizard', function () {
    return view('pages.form-wizard');
});
Route::get('html5-editor', function () {
    return view('pages.html5-editor');
});
Route::get('form-pickers', function () {
    return view('pages.form-pickers');
});
Route::get('image-cropper', function () {
    return view('pages.image-cropper');
});
Route::get('image-dropzone', function () {
    return view('pages.image-dropzone');
});

//Table
Route::get('basic-table', function () {
    return view('pages.basic-table');
});
Route::get('datatable', function () {
    return view('pages.datatable');
});

//Calendar
Route::get('calendar', function () {
    return view('pages.calendar');
});

//UI Element
Route::get('ui-buttons', function () {
    return view('pages.ui-buttons');
});
Route::get('ui-cards', function () {
    return view('pages.ui-cards');
});
Route::get('ui-cards-hover', function () {
    return view('pages.ui-cards-hover');
});
Route::get('ui-modals', function () {
    return view('pages.ui-modals');
});
Route::get('ui-tabs', function () {
    return view('pages.ui-tabs');
});
Route::get('ui-tooltip-popover', function () {
    return view('pages.ui-tooltip-popover');
});
Route::get('ui-sweet-alert', function () {
    return view('pages.ui-sweet-alert');
});
Route::get('ui-notification', function () {
    return view('pages.ui-notification');
});
Route::get('ui-timeline', function () {
    return view('pages.ui-timeline');
});
Route::get('ui-progressbar', function () {
    return view('pages.ui-progressbar');
});
Route::get('ui-typography', function () {
    return view('pages.ui-typography');
});
Route::get('ui-list-group', function () {
    return view('pages.ui-list-group');
});
Route::get('ui-range-slider', function () {
    return view('pages.ui-range-slider');
});
Route::get('ui-carousel', function () {
    return view('pages.ui-carousel');
});


//Icon
Route::get('bootstrap-icon', function () {
    return view('pages.bootstrap-icon');
});
Route::get('font-awesome', function () {
    return view('pages.font-awesome');
});
Route::get('foundation', function () {
    return view('pages.foundation');
});
Route::get('ionicons', function () {
    return view('pages.ionicons');
});
Route::get('themify', function () {
    return view('pages.themify');
});
Route::get('custom-icon', function () {
    return view('pages.custom-icon');
});

//Charts
Route::get('highchart', function () {
    return view('pages.highchart');
});
Route::get('knob-chart', function () {
    return view('pages.knob-chart');
});
Route::get('jvectormap', function () {
    return view('pages.jvectormap');
});
Route::get('apexcharts', function () {
    return view('pages.apexcharts');
});

//Additional Pages
Route::get('video-player', function () {
    return view('pages.video-player');
});
Route::get('login', function () {
    return view('pages.login');
});
Route::get('register', function () {
    return view('pages.register');
});
Route::get('forgot-password', function () {
    return view('pages.forgot-password');
});
Route::get('reset-password', function () {
    return view('pages.reset-password');
});

//Errors Pages
Route::get('400', function () {
    return view('pages.400');
});
Route::get('403', function () {
    return view('pages.403');
});
Route::get('404', function () {
    return view('pages.404');
});
Route::get('500', function () {
    return view('pages.500');
});
Route::get('503', function () {
    return view('pages.503');
});

//Extra Pages
Route::get('blank', function () {
    return view('pages.blank');
});
Route::get('contact-directory', function () {
    return view('pages.contact-directory');
});
Route::get('blog', function () {
    return view('pages.blog');
});
Route::get('blog-detail', function () {
    return view('pages.blog-detail');
});
Route::get('product', function () {
    return view('pages.product');
});
Route::get('product-detail', function () {
    return view('pages.product-detail');
});
Route::get('faq', function () {
    return view('pages.faq');
});
Route::get('profile', function () {
    return view('pages.profile');
});
Route::get('gallery', function () {
    return view('pages.gallery');
});
Route::get('pricing-table', function () {
    return view('pages.pricing-table');
});

//Sitemap, Chat, Invoice
Route::get('sitemap', function () {
    return view('pages.sitemap');
});
Route::get('chat', function () {
    return view('pages.chat');
});
Route::get('invoice', function () {
    return view('pages.invoice');
});

//Documentation
Route::get('introduction', function () {
    return view('pages.introduction');
});
Route::get('getting-started', function () {
    return view('pages.getting-started');
});
Route::get('color-settings', function () {
    return view('pages.color-settings');
});
Route::get('third-party-plugins', function () {
    return view('pages.third-party-plugins');
});



require __DIR__.'/auth.php';
