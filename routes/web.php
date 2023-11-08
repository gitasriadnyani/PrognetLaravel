<?php
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage', [
        "title" => "homepage"
    ]);
});

Route::get('/kontaknew', function () {
    return view('kontaknew');   
});

Route::get('/kontakedit', function () {
    return view('kontakedit');
});

Route::get('/kontaklist', function () {
    return view('kontaklist');
});


Route::resource('/kontak',KontakController::class); 
