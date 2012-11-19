<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

// users/ is index and users/(:any) is show
Route::any( 'login/(:all?)',         'auth@login' );
Route::any( 'logout',                'auth@logout' );
Route::any( 'signup',                'auth@signup' );
Route::any( 'forgot_password',       'auth@forgot_password' );
Route::any( 'reset_password/(:any)', 'auth@reset_password' );

// secure routes
Route::group(array( 'before' => 'auth' ), function()
{
    // Our URL will appear as org_name/workspaces/workspace_id instead of organizations/org_id/workspaces/workspace_id
    Route::get('/', 'organizations@index');
    Route::get('(:any)', 'organizations@index');

    // organization Resource
    Route::get('(:any)/employee-network', 'organizations@show');
    Route::get('new', 'organizations@new');
    Route::get('(:any)/edit', 'organizations@edit');
    Route::post('(:any)', 'organizations@create');
    Route::put('(:any)', 'organizations@update');
    Route::delete('(:any)/delete', 'organization@destroy');    

    // workspace Resource
    Route::get('(:any)/workspaces', 'workspaces@index');
    Route::get('(:any)/workspaces/(:num)', 'workspaces@show');
    Route::get('(:any)/workspaces/new', 'workspaces@new');
    Route::get('(:any)/workspaces/(:any)/edit', 'workspaces@edit');
    Route::post('(:any)/workspaces', 'workspaces@create');
    Route::put('(:any)/workspaces/(:any)', 'workspaces@update');
    Route::delete('(:any)/workspaces/(:any)/delete', 'workspace@destroy');

});




/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
    return Response::error('404');
});

Event::listen('500', function()
{
    return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
    // Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
    // Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
    if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::to('login');
});