<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ClientController;
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

Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/employee', [PageController::class, 'employee'])->name('employee');
        Route::get('/expenditure', [PageController::class, 'expenditure'])->name('expenditure');
        Route::get('/revenue', [PageController::class, 'revenue'])->name('revenue');
        Route::get('/project', [PageController::class,'project'])->name('project');
        Route::get('/client', [PageController::class,'client'])->name('client');
        Route::get('/users', [PageController::class,'users'])->name('users');

    });
    Route::resource('/client', ClientController::class);

});





require __DIR__.'/auth.php';


Route::get('/edit', [ 'as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
