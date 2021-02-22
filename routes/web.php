<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
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

Route::prefix('api')->group(function () {
    Route::get('users', function () {
        $users = DB::table('users')->get();
        return response()->json($users);
    });
    Route::get('users/{id}', function ($id) {
        $user = DB::table('users')->where('id','=',$id)->first();
        return response()->json($user);
    });
});