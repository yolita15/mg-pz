<?php
Route::get('test', 'ClassbookController@getIndex');
Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => ['guest']
    ], function () {
        Route::get('login', 'AuthController@getLogin');
        Route::post('login', 'AuthController@postLogin');
    });
    Route::get('logout', 'AuthController@getLogout');
    Route::get('admin/{slug?}', 'AdminController@getView');
    Route::get('{slug?}', 'PagesController@getView');

});


