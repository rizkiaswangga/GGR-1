<?php

use App\Http\Controllers\ourProductcontroller;
use App\Http\Controllers\productController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\uploadEduController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/trackRecord', function () {
    return view('trackRecord');
});

Route::get('/highlight', function () {
    return view('highlight');
});

Route::get('/compro', function () {
    return view('compro');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/center', function () {
    return view('center');
});

Route::get('/onsite', function () {
    return view('onsite');
});

Route::get('/online', function () {
    return view('online');
});

Route::get('/competition', function () {
    return view('competition');
});

Route::get('/worksem', function () {
    return view('worksem');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/katalog/robot', function () {
    return view('/katalog/robot');
});

Route::get('/katalog/agv', function () {
    return view('katalog/agv');
});

Route::get('/katalog/plc', function () {
    return view('katalog/plc');
});

Route::get('/katalog/nplc', function () {
    return view('katalog/nplc');
});

Route::get('/pic1', function () {
    return view('pic1');
});

Route::get('/pic2', function () {
    return view('pic2');
});

Route::get('/pic3', function () {
    return view('pic3');
});

Route::get('/pic4', function () {
    return view('pic4');
});
Route::get('/si', function () {
    return view('si');
});


Route::view('add', 'upload');

Route::post('add', [uploadController::class, 'upload']);

Route::view('add2', 'upload-edu');

Route::post('add2', [uploadEduController::class, 'upload_edu']);


Route::get('product', [productController::class, 'show']);
Route::get('robot', [ourProductcontroller::class, 'showrobot']);
Route::get('agv', [ourProductcontroller::class, 'showagv']);
Route::get('plc', [ourProductcontroller::class, 'showplc']);
Route::get('nplc', [ourProductcontroller::class, 'shownplc']);
Route::get('home', [mainController::class, 'showmain']);
Route::get('training', [mainController::class, 'showtraining']);
Route::get('compro', [mainController::class, 'showcompro']);
Route::get('highlight', [mainController::class, 'showhighlight']);
