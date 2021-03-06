<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getUsers', [UserController::class, 'getUsers']);

Route::get('/getStudents', [StudentController::class, 'getStudents']);
Route::post('/addNewStudent', [StudentController::class, 'addNewStudent']);
Route::put('/updateStudent', [StudentController::class, 'updateStudent']);
Route::delete('/deleteStudent', [StudentController::class, 'deleteStudent']);
