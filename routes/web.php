<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayListController;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, "index"]);
Route::get('/insert/', [MainController::class, "insert"]);
Route::get('/logout/', [MainController::class, "logout"]);
Route::get('/remove/{id}/',[MainController::class, 'remove']);

Route::get('/lotto/', function () {
    $lucky_number = rand(1, 49);
    $numbers = array();
    for ($i=0; $i<6; $i++) {
        $numbers[] = rand(1, 49);
    }
    return view('lotto', compact('lucky_number', 'numbers'));
});

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/playlist/', [PlayListController::class, 'index']);
Route::get('/remove/{id}/',[PlayListController::class, 'remove']);
Route::get('/append/', [PlayListController::class, 'append']);

Route::get('/lucky/', function () {
    $lucky_number = rand(1, 49);
    $numbers = array();
    for ($i=0; $i<6; $i++) {
        $numbers[] = rand(1, 49);
    }
    return view('lotto', compact('lucky_number', 'numbers'));
});
*/
