<?php

//SITE
Route::get('/', function () {
    return view('site.home');
});

//conheça nossa equipe
Route::get('/funcionario', function () {
    return view('site.funcionario.index');
});

//documentos
Route::get('/documento', 'DocumentosController@indexSite'); 

//sobre
Route::get('/sobre', function () {
    return view('site.sobre.index');
});

//publicações
//publicações lista
Route::get('/publicacoes', 'PublicacoesController@indexSite'); 
Route::get('/publicacoes/{id}', 'PublicacoesController@indexSite'); 

//publicação show
Route::get('/publicacao/{id}', 'PublicacoesController@showSite'); 

//Agenda
Route::get('/agenda', 'AgendasController@indexSite'); 

//Autentificação de usuário
Auth::routes();
Route::get('/admr', 'HomeController@index')->name('home');
Route::get('/sair', 'HomeController@logout');

//aluno
Route::get('/admr/aluno/cadastrar', 'AlunosController@create')->middleware('auth');
Route::post('/admr/aluno/cadastrado', 'AlunosController@store')->middleware('auth');
Route::get('/admr/aluno/editar/{id}', 'AlunosController@edit')->middleware('auth');
Route::post('/admr/aluno/editado', 'AlunosController@update')->middleware('auth');
Route::get('/admr/aluno/delete/{id}', 'AlunosController@destroy')->middleware('auth');
Route::resource('/admr/aluno', 'AlunosController')->middleware('auth');

//funcionarios
Route::get('/admr/funcionario/cadastrar', 'FuncionariosController@create')->middleware('auth');
Route::post('/admr/funcionario/cadastrado', 'FuncionariosController@store')->middleware('auth');
Route::get('/admr/funcionario/editar/{id}', 'FuncionariosController@edit')->middleware('auth');
Route::post('/admr/funcionario/editado', 'FuncionariosController@update')->middleware('auth');
Route::get('/admr/funcionario/delete/{id}', 'FuncionariosController@destroy')->middleware('auth');
Route::resource('/admr/funcionario', 'FuncionariosController')->middleware('auth');

//documentos
Route::get('/admr/documento/cadastrar', 'DocumentosController@create')->middleware('auth');
Route::post('/admr/documento/cadastrado', 'DocumentosController@store')->middleware('auth');
Route::get('/admr/documento/editar/{id}', 'DocumentosController@edit')->middleware('auth');
Route::post('/admr/documento/editado', 'DocumentosController@update')->middleware('auth');
Route::get('/admr/documento/delete/{id}', 'DocumentosController@destroy')->middleware('auth');
Route::resource('/admr/documento', 'DocumentosController')->middleware('auth');

//publicacoes
Route::get('/admr/publicacao/cadastrar', 'PublicacoesController@create')->middleware('auth');
Route::post('/admr/publicacao/cadastrado', 'PublicacoesController@store')->middleware('auth');
Route::get('/admr/publicacao/editar/{id}', 'PublicacoesController@edit')->middleware('auth');
Route::post('/admr/publicacao/editado', 'PublicacoesController@update')->middleware('auth');
Route::get('/admr/publicacao/delete/{id}', 'PublicacoesController@destroy')->middleware('auth');
Route::resource('/admr/publicacao', 'PublicacoesController')->middleware('auth');

//tipoPublicações
Route::post('/admr/tipopublicacao/cadastrado', 'TipoPublicacoesController@store')->middleware('auth');
Route::get('/admr/tipopublicacao/delete/{id}', 'TipoPublicacoesController@destroy')->middleware('auth');
Route::resource('/admr/tipopublicacao', 'TipoPublicacoesController')->middleware('auth');

//turmas
Route::get('/admr/turma/cadastrar', 'TurmasController@create')->middleware('auth');
Route::post('/admr/turma/cadastrado', 'TurmasController@store')->middleware('auth');
Route::get('/admr/turma/editar/{id}', 'TurmasController@edit')->middleware('auth');
Route::post('/admr/turma/editado', 'TurmasController@update')->middleware('auth');
Route::get('/admr/turma/delete/{id}', 'TurmasController@destroy')->middleware('auth');
Route::resource('/admr/turma', 'TurmasController')->middleware('auth');

//turmaAluno
Route::get('/admr/turmaaluno/cadastrar', 'TurmaAlunosController@create')->middleware('auth');
Route::post('/admr/turmaaluno/cadastrado', 'TurmaAlunosController@store')->middleware('auth');
Route::get('/admr/turmaaluno/delete/{id}', 'TurmaAlunosController@destroy')->middleware('auth');
Route::resource('/admr/turmaaluno', 'TurmaAlunosController')->middleware('auth');

//capítulo
Route::get('/admr/capitulo/cadastrar/{id}', 'CapitulosController@create')->middleware('auth');
Route::post('/admr/capitulo/cadastrado', 'CapitulosController@store')->middleware('auth');
Route::get('/admr/capitulo/editar/{id}', 'CapitulosController@edit')->middleware('auth');
Route::post('/admr/capitulo/editado', 'CapitulosController@update')->middleware('auth');
Route::get('/admr/capitulo/delete/{id}', 'CapitulosController@destroy')->middleware('auth');
Route::resource('/admr/capitulo', 'CapitulosController')->middleware('auth');

//agenda
Route::get('/admr/agenda/cadastrar', 'AgendasController@create')->middleware('auth');
Route::post('/admr/agenda/cadastrado', 'AgendasController@store')->middleware('auth');
Route::get('/admr/agenda/editar/{id}', 'AgendasController@edit')->middleware('auth');
Route::post('/admr/agenda/editado', 'AgendasController@update')->middleware('auth');
Route::get('/admr/agenda/delete/{id}', 'AgendasController@destroy')->middleware('auth');
Route::resource('/admr/agenda', 'AgendasController')->middleware('auth');

//foto
Route::get('/admr/foto/cadastrar/{id}', 'FotosController@create')->middleware('auth');
Route::post('/admr/foto/cadastrado', 'FotosController@store')->middleware('auth');
Route::get('/admr/foto/editar/{id}', 'FotosController@edit')->middleware('auth');
Route::post('/admr/foto/editado', 'FotosController@update')->middleware('auth');
Route::get('/admr/foto/delete/{id}', 'FotosController@destroy')->middleware('auth');
Route::resource('/admr/foto', 'FotosController')->middleware('auth');

// Controle de usuários
Route::resource('/admr/usuario', 'UsersController')->middleware('auth');
Route::get('/admr/usuario/adiministrador/{id}', 'UsersController@administator')->middleware('auth');
Route::get('/admr/usuario/habilitar/{id}', 'UsersController@enable')->middleware('auth');
Route::get('/admr/usuario/desabilitar/{id}', 'UsersController@disable')->middleware('auth');
Route::get('/admr/usuario/padrao/{id}', 'UsersController@standard')->middleware('auth');
Route::get('/admr/usuario/perfil', 'UsersController@profile')->middleware('auth');
