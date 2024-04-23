<?php

use Illuminate\Http\Request;
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
});

Route::get('/list-menu/getAllData', function () {
    return response()->json([
        'info' => 'Data Berhasil didapatkan',
        'data' => [
            [
                'makanan' => 'Soto Mie',
                'harga' => '8000',
            ],
            [
                'makanan' => 'Bakso Malang',
                'harga' => '13000',
            ],
            [
                'makanan' => 'Ketoprak',
                'harga' => '15000',
            ]
        ]
    ]);
});

Route::get('/list-menu', function () {
    return "Ini adalah halaman yang menampilkan semua menu yang ada di Cafe Amandemy.";
});

Route::get('/list-menu/{makanan}/{harga}', function (Request $request) {
    return "Anda memilih makanan " . $request->makanan .  " dengan harga " . $request->harga;
});