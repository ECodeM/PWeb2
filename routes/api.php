<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('medico/', [MedicoController::class, 'index']);
Route::get('medico/{id}', [MedicoController::class, 'show']);
Route::post('medico/', [MedicoController::class, 'store']);
Route::put('medico/{id}', [MedicoController::class, 'update']);
Route::get('medico/{id}', [MedicoController::class, 'delete']);




