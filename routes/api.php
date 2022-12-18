<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('people/Wcislinski/305421', [PeopleController::class, 'index']);
Route::get('people/Wcislinski/305421/{id}', [PeopleController::class, 'show']);
Route::put('people/Wcislinski/305421/{people}', [PeopleController::class, 'update']);
Route::delete('people/Wcislinski/305421', [PeopleController::class, 'destroy']);
Route::get('people/Wcislinski/305421', [PeopleController::class, 'create']);
