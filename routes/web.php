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
Route::get('/saludo', function () {
    return "hello";
});
#route with parameters
Route::get('/saludo/{saludo}', function ($saludo) {
    return "hello".$saludo;
});
#route add two parameters
Route::get('/saludo/{num1}/{num2}', function ($num1, $num2) {
    return "hello".$saludo+$saludo2;
})-> where(['num1' => 'num1', 'num2' => '[0-9]']);

#route with 3 parameters types number
Route::get('/saludo/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3){
    #function who return num1*num2*num3.

        return $num1*$num2*$num3;

});
