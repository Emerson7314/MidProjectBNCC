<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/dashboard', [EmployeeController::class, 'show']);
Route::get('/add-employee', [EmployeeController::class, 'create']);
Route::post('/store-employee', [EmployeeController::class, 'store']);
Route::get('/detail-employee/{id}', [EmployeeController::class, 'showDetail']);
Route::get('/edit-employee/{id}', [EmployeeController::class, 'edit']);
Route::patch('/update-employee/{id}', [EmployeeController::class, 'update']);
Route::delete('/delete-employee/{id}', [EmployeeController::class, 'destroy']);
