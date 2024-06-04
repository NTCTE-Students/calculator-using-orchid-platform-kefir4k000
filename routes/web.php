<?php
use App\Orchid\Screens\CalculatorScreen;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::screen('calculator', CalculatorScreen::class)->name('platform.calculator');
