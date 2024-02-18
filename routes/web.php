<?php

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

//Route::get('/', function () {
//    return view('welcome');
Route::get('/', function () {
    return redirect('dashboard-1');
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
