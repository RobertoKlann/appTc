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
    'prefix'     => 'app',
], function($router) {
    Route::get('{route}', 'HomeController@index')->where('route', 'index|home');

    //Estabelecimento e Cardápio
    Route::get('/estabelecimentos', 'EstabelecimentoController@index')->name('estabelecimentos');
    Route::get('/estabelecimento/cardapio/{codigo}'          , 'EstabelecimentoController@getCategorias')->name('estabelecimento.cardapio');
    Route::get('/estabelecimento/produto/{codigo}'           , 'CardapioController@getProduto')->name('estabelecimento.produto');
    Route::get('/estabelecimento/petiscos'                   , 'CardapioController@getPetiscos')->name('estabelecimento.petiscos');
    Route::get('/estabelecimento/produtos/categoria/{codigo}', 'CardapioController@getProdutosCategoria')->name('estabelecimento.produtos');

    //Pedidos
    Route::get('/pedidos/{codigo}'       , 'PedidoController@index')->name('pedidos');
    Route::post('/pedido'                , 'PedidoController@store')->name('pedido');
    Route::get('/pedidos/pedido/{codigo}', 'PedidoController@getPedido')->name('pedido');

    //Usuário
    Route::get('/cadastroUsuario', 'UsuarioController@createUsuario')->name('cadastroUsuario');
    Route::get('/usuario/perfil', 'UsuarioController@indexUsuario')->name('usuario.perfil');

    //Ajax
    Route::get('/getAllMesaEstabelecimento/{codigo}', 'EstabelecimentoController@getMesas')->name('estabelecimento.mesas');    
    Route::get('/getValorTotalPedido/{codigo}'      , 'PedidoController@getValorTotalPedido')->name('estabelecimento.mesas');
});