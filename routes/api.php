<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\CodingController;

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

Route::get('/get_transaction', [TransactionController::class, 'get_transaction']);
Route::get('/decbin/{decimal}', [CodingController::class, 'decbin']);
Route::get('/bindec/{binary}', [CodingController::class, 'bindec']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
