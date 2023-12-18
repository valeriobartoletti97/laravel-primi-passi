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
    $data = [
        'name' => 'Valerio',
        'surname' => 'Bartoletti',
        'greetings' => 'che piacere conoscerti!'
    ];
    return view('home', $data);
});
Route::get('/about-me', function () {
    $data = [
        'text' => 'Qualcosa su di me dici? Beh se proprio vuoi saperlo mi sto divertendo a fare tutto questo all\'una di notte di Domenica perchè nei giorni precedenti ho dovuto cambiare i pezzi del mio Pc :)'
    ];
    return view('pages.about', $data);
});
