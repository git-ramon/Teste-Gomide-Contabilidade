<?php

use illuminate\Support\Facades\Route;

Route::get('/', 'ProdutosController@create');
Route::post('/produtos/cadastrar', 'ProdutosController@store')->name('cadastro_produto');
Route::get('/produtos/editar/{id}', 'ProdutosController@edit');
Route::post('/produtos/editar/{id}', 'ProdutosController@update')->name('editar_produto');
Route::get('/produtos/deletar/{id}', 'ProdutosController@delete');
Route::post('/produtos/deletar{id}', 'ProdutosController@destroy')->name('deletar_produto');

