<?php

use App\Http\Controllers\ProjectController;
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


Route::middleware(['auth:sanctum', 'verified'])
   ->namespace('App\Http\Controllers')->group(function () {
   Route::resource('projects', 'ProjectController');
   Route::get('projects/{id}/make', [ProjectController::class, 'make']);
   Route::get('mk/projects', [\App\Http\Controllers\Mk\MakeController::class, 'hello']);
});
