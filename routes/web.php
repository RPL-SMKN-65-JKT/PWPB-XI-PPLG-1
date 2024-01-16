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
    return view('welcome');
});

Route::get("/belajar1", function(){
    $nama = "FERDY";
    $kelas = "XII pplg 9";
    $nama2 = "umar botak";
    $kelas2 = "11 pplg 2";
    $nama3 = "d fasfsa";
    $kelas3 = "12 pplg 2";
    return view('belajar1', compact("nama", "kelas", "nama2", "kelas2", "nama3", "kelas3"));
});

Route::get('/belajar2', function () {
    $students = [
        [
            'nama' => 'Alan',
            'kelas' => '12 RPL',
            'uang_jajan' => 5000,
        ],
        [
            'nama' => 'Bagir',
            'kelas' => '11 PPLG 1',
            'uang_jajan' => 5000,
        ],
        [
            'nama' => 'Ferdian',
            'kelas' => '11 PPLG 1',
            'uang_jajan' => 5000,
        ],
        [
            'nama' => 'Umar',
            'kelas' => '11 PPLG 1',
            'uang_jajan' => 5000,
        ],
        [
            'nama' => 'Davin',
            'kelas' => '11 PPLG 1',
            'uang_jajan' => 5000,
        ],
    ];

    return view('belajar2', compact('students'));

});
