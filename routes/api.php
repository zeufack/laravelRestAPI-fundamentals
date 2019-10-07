<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function () {
    Route::resource('meeting', 'MeetingController',[
        'except' => ['edit', 'create']
    ]);

    Route::resource('meeting/registration', 'RegistrationController', [
        'only' => ['store', 'destroy']
    ]);

    Route::post('users',[
        'uses' => 'AuthController@store'
    ]);

    Route::post('users/sigin',[
        'uses' => 'AuthController@store'
    ]);
});

