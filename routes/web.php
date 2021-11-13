<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fortnite;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [Fortnite::class,'inicio'])
->name('chapulin');
Route::post('/colorado', [Fortnite::class, 'jinx'])
->name('colorado');