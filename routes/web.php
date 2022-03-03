<?php

use App\lib\oop\Mobile;
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
    $run = new \App\lib\adapter\Image\RunImage();
    $run->run();
});
Route::get('/mobile', function () {
    $Samsung = new Mobile();
    $Xiaomi = new Mobile();
    $Iphone = new Mobile();
    $Samsung->setModel("SamsungS8");
    $Iphone->setModel("Iphone7s");
    $Xiaomi->setModel("MI4");
    $Samsung->setPrice(90000);
    $Iphone->setPrice(65000);
    $Xiaomi->setPrice(15000);
    echo $Samsung->getModel();
    echo '<br/>';
    echo $Iphone->getModel();
    echo '<br/>';
    echo $Xiaomi->getModel();
    echo '<br/>';
    echo $Samsung->getPrice();
    echo '<br/>';
    echo $Iphone->getPrice();
    echo '<br/>';
    echo $Xiaomi->getPrice();
    echo Mobile::name;

});
