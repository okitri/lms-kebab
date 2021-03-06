<?php

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

Route::group([
    'prefix' => 'v1'

], function () {
    Route::post('iam/login', 'IAM\LoginController@login');
    Route::post('iam/register', 'IAM\UserController@register');
    Route::get('iam/verify/{token}', 'IAM\UserController@verifyUser');
    Route::group([
        'middleware' => 'api',
        'prefix' => 'iam'
    ], function () {
        Route::get('me', 'IAM\UserController@me');
    });
});
