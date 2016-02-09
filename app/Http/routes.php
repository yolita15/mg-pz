<?php

Route::group([
    'middleware' => ['guest']
], function() {
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
});
Route::get('logout', 'AuthController@getLogout');
Route::get('{slug?}', 'PagesController@getView');

