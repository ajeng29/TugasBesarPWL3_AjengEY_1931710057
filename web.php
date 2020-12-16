<?php

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
Route::get('/basic-route', function () {
    return 'Hello Ajeng';
});
Route::get('/route-parameters/{page}', function ($page) {
    return "Hello, ini adalah percobaan route ".$page;
});
Route::get('/parameter-optional/{page?}', function ($page=1) {
    return "Hello, nomor antrian anda adalah ".$page;
});
Route::get('/tugas1/{a}/{b}', function ($a,$b){ 
    $hasil=$a+$b;
    return "Hello, nomor antrian anda adalah  ".$hasil;
});
Route::get('jumlah', 'Tugas_pertama_Ajeng@penjumlahan');

Route::get('/hello', function(){
    return view('hello', ['name'=>'Andi']);
});
Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');


Route::get('home', 'Tugas2Ajeng@home');

Route::get('/Articlee/{id}', 'Tugas2Ajeng@article');

Route::get('About', 'Tugas2Ajeng@about');


Route::get('home2', 'KuisController@home2');
Route::get('Article', 'KuisController@article');
Route::get('About', 'KuisController@about');
Route::get('index', 'KuisController@index');

Route::get('projek', 'ProjekController@projek3');