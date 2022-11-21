<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/subjects/all' ,[ \App\Http\Controllers\SubjectController::class , 'index'] );

Route::post('/subjects/store' , [\App\Http\Controllers\SubjectController::class , 'store'] );

Route::get('/subjects/show/{subject}' ,[ \App\Http\Controllers\SubjectController::class , 'show'] );

Route::put('/subjects/update/{id}' , [ \App\Http\Controllers\SubjectController::class , 'update']);

Route::delete('/subjects/delete/{subject}' , [ \App\Http\Controllers\SubjectController::class , 'delete']);
