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
