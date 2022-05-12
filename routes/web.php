<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

Route::get('/students/create', [StudentController::class, 'create']);//  C  R 
                                                                     //  E  A
Route::post('/students', [StudentController::class, 'store']);       //  T  E


Route::get('/students', [StudentController::class, 'index']);// R  E  A  D


Route::get('/students/{student}/edit', [StudentController::class, 'edit']);//  U  P
                                                                           //  D  A
Route::put('/students/{student}', [StudentController::class, 'update']);   //  T  E


Route::get('/students/{student}/delete', [StudentController::class, 'destroy']);// D  E  L  E  T  E
