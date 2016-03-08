<?php

Route::get('napravisiadmin', 'ClassbookController@getIndex');
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['guest']
    ], function () {
        Route::get('login', 'AuthController@getLogin');
        Route::post('login', 'AuthController@postLogin');
    });


    Route::get('logout', 'AuthController@getLogout');

   //Admin
    Route::group(['middleware' => ['auth','auth.admin']
    ], function () {
        Route::group([
            'prefix' => 'admin',
            'namespace' => 'Admin'
        ], function () {
            Route::controller('student', 'StudentsController');
            Route::controller('profile', 'ProfilesController');
            Route::controller('class', 'ClassesController');
            Route::controller('subjects', 'SubjectsController');
            Route::controller('teacher', 'TeachersController');
            Route::controller('marktype', 'MarkTypeController');
            Route::controller('rules', 'RuleController');
            Route::get('{slug?}', 'PageController@getView');


        });

    });
    //Admin

    //Student

    Route::group([
        'middleware' => ['auth', 'auth.student' ],
        'prefix' => 'stu',
        'namespace' => 'Stu'
    ], function () {
        Route::get('{slug?}', 'StuController@getView');
    });

    //Student

    //Teacher

    Route::group([
        'middleware' => ['auth', 'auth.teacher'],
        'prefix' => 'educator',
        'namespace' => 'Educator'
           ], function () {
                   Route::get('edit/{id}', 'AccountController@edit');
                   Route::post('edit/{id}', 'AccountController@saveEdit');
                   Route::get('account', 'AccountController@getView');
                   Route::get('class-subject', 'AccountController@getIndex');
                   Route::get('add-mark', 'AccountController@postIndex');
                   Route::post('mark', 'AccountController@markStudent');
                   Route::get('added', 'AccountController@addedMark');
              });

           });

    //Teacher

    Route::get('{slug?}', 'PageController@getView');
























    function set_active($path, $active = 'active')
    {

        return call_user_func_array('Request::is', (array)$path) ? $active : '';

    }
    function set_active_admin($path, $active = 'admin-active')
    {

        return call_user_func_array('Request::is', (array)$path) ? $active : '';

    }




