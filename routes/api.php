<?php

use Illuminate\Http\Request;

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

Route::get('/contact','SubmissionController@show');

Route::post('/contact','SubmissionController@create');

Route::get('/contact/{id}','SubmissionController@showbyid');

Route::put('/contactupdate/{id}','SubmissionController@updatebyid');

Route::delete('/contactdelete/{id}','SubmissionController@deletebyid');