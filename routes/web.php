<?php

//SITE
Route::get('/', 'PublicacoesController@homeSite');

//conheça nossa equipe
Route::get('funcionario', 'FuncionariosController@indexSite')->name('funcionario');

//documentos
Route::get('documento', 'DocumentosController@indexSite')->name('documento');

//sobre
Route::get('/sobre', function () {
    return view('site.sobre.index');
});

//publicações
//publicações lista
Route::get('publicacoes', 'PublicacoesController@indexSite')->name('publicacoes');
Route::get('publicacoes/{id}', 'PublicacoesController@indexSite')->name('publicacoes');

//publicação show
Route::get('publicacao/{id}', 'PublicacoesController@showSite')->name('publicacao');

//Agenda
Route::get('agenda', 'AgendasController@indexSite')->name('agenda');

//Autentificação de usuário
Auth::routes();
Route::get('/admr', 'HomeController@index')->name('home');
Route::get('/sair', 'HomeController@logout')->name('logout');

Route::group(['prefix' => 'admr', 'middleware' => 'auth'], function () {
    
    //aluno
    Route::post('aluno/editado', 'AlunosController@update')->name('aluno.editado');
    Route::get('aluno/delete/{id}', 'AlunosController@destroy')->name('aluno.delete');
    Route::resource('aluno', 'AlunosController');

    //funcionario
    Route::post('funcionario/editado', 'FuncionariosController@update')->name('funcionario.editado');
    Route::get('funcionario/delete/{id}', 'FuncionariosController@destroy')->name('funcionario.delete');
    Route::resource('funcionario', 'FuncionariosController');

    //documento
    Route::post('documento/editado', 'DocumentosController@update')->name('documento.editado');
    Route::get('documento/delete/{id}', 'DocumentosController@destroy')->name('documento.delete');
    Route::resource('documento', 'DocumentosController');

    //publicacao
    Route::post('publicacao/editado', 'PublicacoesController@update')->name('publicacao.editado');
    Route::get('publicacao/delete/{id}', 'PublicacoesController@destroy')->name('publicacao.delete');
    Route::resource('publicacao', 'PublicacoesController');

    //tipopublicacao
    Route::post('tipopublicacao/editado', 'TipoPublicacoesController@update')->name('tipopublicacao.editado');
    Route::get('tipopublicacao/delete/{id}', 'TipoPublicacoesController@destroy')->name('tipopublicacao.delete');
    Route::resource('tipopublicacao', 'TipoPublicacoesController');

    //turma
    Route::post('turma/editado', 'TurmasController@update')->name('turma.editado');
    Route::get('turma/delete/{id}', 'TurmasController@destroy')->name('turma.delete');
    Route::resource('turma', 'TurmasController');

    //turmaaluno
    Route::post('turmaaluno/editado', 'TurmaAlunosController@update')->name('turmaaluno.editado');
    Route::get('turmaaluno/delete/{id}', 'TurmaAlunosController@destroy')->name('turmaaluno.delete');
    Route::resource('turmaaluno', 'TurmaAlunosController');

    //capitulo
    Route::get('capitulo/cadastrar/{id}', 'CapitulosController@create')->name('capitulo.cadastrar');
    Route::post('capitulo/editado', 'CapitulosController@update')->name('capitulo.editado');
    Route::get('capitulo/delete/{id}', 'CapitulosController@destroy')->name('capitulo.delete');
    Route::resource('capitulo', 'CapitulosController');

    //agenda
    Route::post('agenda/editado', 'AgendasController@update')->name('agenda.editado');
    Route::get('agenda/delete/{id}', 'AgendasController@destroy')->name('agenda.delete');
    Route::resource('agenda', 'AgendasController');

    //foto
    Route::get('foto/cadastrar/{id}', 'FotosController@create')->name('foto.cadastrar');
    Route::post('foto/editado', 'FotosController@update')->name('foto.editado');
    Route::get('foto/delete/{id}', 'FotosController@destroy')->name('foto.delete');
    Route::resource('foto', 'FotosController');

    //usuario    
    Route::get('usuario/adiministrador/{id}', 'UsersController@administator')->name('usuario.adiministrador');
    Route::get('usuario/habilitar/{id}', 'UsersController@enable')->name('usuario.habilitar');
    Route::get('usuario/desabilitar/{id}', 'UsersController@disable')->name('usuario.desabilitar');
    Route::get('usuario/padrao/{id}', 'UsersController@standard')->name('usuario.padrao');
    Route::post('usuario/editado', 'UsersController@update')->name('usuario.editado');
    Route::get('usuario/perfil', 'UsersController@profile')->name('usuario.perfil');
    Route::resource('usuario', 'UsersController');

});
