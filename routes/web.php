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
