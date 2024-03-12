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

Route::get('/', function () {

    $data = [];
    for ($i = 0; $i<10; $i++){
        $newNumber = rand(0, 100);
        array_push($data, $newNumber);
    }

    return view('home', compact('data'));
});
