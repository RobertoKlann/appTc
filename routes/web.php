<?php

/**
 * Rota de todas as rotinas do sitema.
 *
 * @package Routes
 * @author  Roberto Oswaldo Klann
 * @since   23/08/2019
 */

Route::get('/', function() {
    return redirect('auth/login');
});

/*
 | Auth
 |
 */
Route::group([
    'namespace' => 'Auth',
    'prefix'    => 'auth'
], function($router) {
    Route::get('login' , 'LoginController@index')->name('auth.index');
    Route::post('login', 'LoginController@login')->name('auth.login');
    Route::get('logout', 'LoginController@logout')->name('auth.logout');
});

Route::group([
    'namespace'  => 'BobWaiter',
    'prefix'     => 'app'//,
    //'middleware' => 'auth'
], function($router) {
    Route::get('{route}', 'HomeController@index')->where('route', 'index|home');

    //Consultas
    Route::get('/estabelecimentos', 'AppController@index')->name('estabelecimentos');
});