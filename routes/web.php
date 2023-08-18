<?php

use App\Livewire\AnotherOne;
use App\Livewire\AnotherTwo;
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
    return view('welcome');
})->name('home');

Route::get('/another-one', AnotherOne::class)->name('another-one');
Route::get('/another-two', AnotherTwo::class)->name('another-two');
