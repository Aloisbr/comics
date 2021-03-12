<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DesignerController;

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

Route::get('/', [NavController::class, 'home']);

Route::get('/characters', [NavController::class, 'characters']);
Route::get('/designers', [NavController::class, 'designers']);

Route::get('/character/{id}', [NavController::class, 'character']);
Route::get('/designer/{id}', [NavController::class, 'designer']);

Route::get('/addCharacter', [NavController::class, 'addCharacter']);
Route::post('/addCharacter', [CharacterController::class, 'store']);

Route::get('/addDesigner', [NavController::class, 'addDesigner']);
Route::post('/addDesigner', [DesignerController::class, 'store']);

Route::get('/editCharacter/{id}', [NavController::class, 'editCharacter']);
Route::post('/editCharacter', [CharacterController::class, 'edit']);

Route::get('/editDesigner/{id}', [NavController::class, 'editDesigner']);
Route::post('/editDesigner', [DesignerController::class, 'edit']);



Route::post('/removeCharacter', [CharacterController::class, 'remove']);
Route::post('/removeDesigner', [DesignerController::class, 'remove']);
