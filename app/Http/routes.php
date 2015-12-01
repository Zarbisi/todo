<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'Auth\AuthController@getLogin');

// Authentication routes

Route::get('auth/login', [ 'as' => 'login' ,'uses' => 'Auth\AuthController@getLogin']);

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', [ 'as' => 'logout', 'uses' => 'Auth\AuthController@getLogout' ]);

// Registration routes

Route::get('auth/register', [ 'as' => 'creation', 'uses' => 'Auth\AuthController@getRegister' ]);

Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([

    'password' => 'Auth\PasswordController',

]);

// Accueil route

Route::get('/',[ 'as'=>'Accueil' ,'uses' =>'TODOController@TODOAccueil']);

// Home route

Route::get('home', 'TODOController@TODOHome');

Route::resource('projects', 'ProjectsController');
//Route::resource('tasks', 'TasksController');
Route::resource('projects.task', 'TasksController');

Route::bind('tasks', function($value, $route)
{
    return App\Task::whereSlug($value)->first();
});

Route::bind('projects', function($value, $route)
{
    return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');