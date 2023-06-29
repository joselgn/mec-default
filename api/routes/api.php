<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return response(json_encode([
        'laravel_version' => app()->version(), 
        'app_env' => config('app.env'), 
        'deploy_version' => env('APP_VER', null)
    ]))
        ->header('Access-Control-Allow-Origin',' *')
        ->header('Access-Control-Allow-Methods', '*')
        ->header('Access-Control-Allow-Headers', '*');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


