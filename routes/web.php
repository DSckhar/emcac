<?php

//SITE
Route::get('/', function () {
    return view('site.home');
});

//conheça nossa equipe
Route::get('/professor', function () {
    return view('site.professor.index');
});

//documentos
Route::get('/documento', function () {
    return view('site.documento.index');
});

//sobre
Route::get('/sobre', function () {
    return view('site.sobre.index');
});

//publicações
Route::get('/publicacao', function () {
    return view('site.publicacao.index');
});

//Boletins
Route::get('/boletim', function () {
    return view('site.boletim.index');
});

//ADMIN
Route::get('/admr', function () {
    return view('admin.login');
});

//aluno
Route::get('/admr/aluno/cadastrar', 'AlunosController@create');
Route::post('/admr/aluno/cadastrado', 'AlunosController@store');
Route::get('/admr/aluno/editar/{id}', 'AlunosController@edit');
Route::post('/admr/aluno/editado', 'AlunosController@update');
Route::get('/admr/aluno/delete/{id}', 'AlunosController@destroy');
Route::resource('/admr/aluno', 'AlunosController');

//funcionarios
Route::get('/admr/funcionario/cadastrar', 'FuncionariosController@create');
Route::post('/admr/funcionario/cadastrado', 'FuncionariosController@store');
Route::get('/admr/funcionario/editar/{id}', 'FuncionariosController@edit');
Route::post('/admr/funcionario/editado', 'FuncionariosController@update');
Route::get('/admr/funcionario/delete/{id}', 'FuncionariosController@destroy');
Route::resource('/admr/funcionario', 'FuncionariosController');

//documentos
Route::get('/admr/documento/cadastrar', 'DocumentosController@create');
Route::post('/admr/documento/cadastrado', 'DocumentosController@store');
Route::get('/admr/documento/editar/{id}', 'DocumentosController@edit');
Route::post('/admr/documento/editado', 'DocumentosController@update');
Route::get('/admr/documento/delete/{id}', 'DocumentosController@destroy');
Route::resource('/admr/documento', 'DocumentosController');

//publicacoes
Route::get('/admr/publicacao/cadastrar', 'PublicacoesController@create');
Route::post('/admr/publicacao/cadastrado', 'PublicacoesController@store');
Route::get('/admr/publicacao/editar/{id}', 'PublicacoesController@edit');
Route::post('/admr/publicacao/editado', 'PublicacoesController@update');
Route::get('/admr/publicacao/delete/{id}', 'PublicacoesController@destroy');
Route::resource('/admr/publicacao', 'PublicacoesController');

//turmas
Route::get('/admr/turma/cadastrar', 'TurmasController@create');
Route::post('/admr/turma/cadastrado', 'TurmasController@store');
Route::get('/admr/turma/editar/{id}', 'TurmasController@edit');
Route::post('/admr/turma/editado', 'TurmasController@update');
Route::get('/admr/turma/delete/{id}', 'TurmasController@destroy');
Route::resource('/admr/turma', 'TurmasController');

