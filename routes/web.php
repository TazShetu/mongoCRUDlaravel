<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require_once __DIR__.'/auth.php';


Route::get('/test', [TestController::class, 'test']);
Route::post('/test_p', [TestController::class, 'testStore'])->name('test.store');
Route::get('/test_transactions', [TestController::class, 'testTransactions']);
Route::get('/test_onDuplicate', [TestController::class, 'testOnDuplicate']);
