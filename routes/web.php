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
Route::get('/publicacao/{id}', 'PublicacoesController@showSite'); 

//Boletins
Route::get('/boletim', function () {
    return view('site.boletim.index');
});

//Agenda
Route::get('/agenda', 'AgendasController@indexSite'); 

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

//tipoPublicações
Route::post('/admr/tipopublicacao/cadastrado', 'TipoPublicacoesController@store');
Route::resource('/admr/tipopublicacao', 'TipoPublicacoesController');

//turmas
Route::get('/admr/turma/cadastrar', 'TurmasController@create');
Route::post('/admr/turma/cadastrado', 'TurmasController@store');
Route::get('/admr/turma/editar/{id}', 'TurmasController@edit');
Route::post('/admr/turma/editado', 'TurmasController@update');
Route::get('/admr/turma/delete/{id}', 'TurmasController@destroy');
Route::resource('/admr/turma', 'TurmasController');

//responsáveis
Route::get('/admr/responsavel/cadastrar', 'ResponsaveisController@create');
Route::post('/admr/responsavel/cadastrado', 'ResponsaveisController@store');
Route::get('/admr/responsavel/editar/{id}', 'ResponsaveisController@edit');
Route::post('/admr/responsavel/editado', 'ResponsaveisController@update');
Route::get('/admr/responsavel/delete/{id}', 'ResponsaveisController@destroy');
Route::resource('/admr/responsavel', 'ResponsaveisController');

//boletins
Route::get('/admr/nota/cadastrar/{id}', 'NotasController@create');
Route::post('/admr/nota/cadastrado', 'NotasController@store');
Route::get('/admr/nota/editar/{id}', 'NotasController@edit');
Route::post('/admr/nota/editado', 'NotasController@update');
Route::get('/admr/nota/delete/{id}', 'NotasController@destroy');
Route::resource('/admr/nota', 'NotasController');

//capítulo
Route::get('/admr/capitulo/cadastrar', 'CapitulosController@create');
Route::post('/admr/capitulo/cadastrado', 'CapitulosController@store');
Route::get('/admr/capitulo/editar/{id}', 'CapitulosController@edit');
Route::post('/admr/capitulo/editado', 'CapitulosController@update');
Route::get('/admr/capitulo/delete/{id}', 'CapitulosController@destroy');
Route::resource('/admr/capitulo', 'CapitulosController');


//agenda
Route::get('/admr/agenda/cadastrar', 'AgendasController@create');
Route::post('/admr/agenda/cadastrado', 'AgendasController@store');
Route::get('/admr/agenda/editar/{id}', 'AgendasController@edit');
Route::post('/admr/agenda/editado', 'AgendasController@update');
Route::get('/admr/agenda/delete/{id}', 'AgendasController@destroy');
Route::resource('/admr/agenda', 'AgendasController');

//foto
Route::get('/admr/foto/cadastrar/{id}', 'FotosController@create');
Route::post('/admr/foto/cadastrado', 'FotosController@store');
Route::get('/admr/foto/editar/{id}', 'FotosController@edit');
Route::post('/admr/foto/editado', 'FotosController@update');
Route::get('/admr/foto/delete/{id}', 'FotosController@destroy');
Route::resource('/admr/foto', 'FotosController');
