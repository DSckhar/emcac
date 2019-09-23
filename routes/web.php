<?php

//site
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

//ADMIN
Route::get('/admr', function () {
    return view('admin.login');
});

Route::get('/admr/aluno/cadastrar', 'AlunosController@create');
Route::post('/admr/aluno/cadastrado', 'AlunosController@store');
Route::get('/admr/aluno/editar/{id}', 'AlunosController@edit');
Route::post('/admr/aluno/editado', 'AlunosController@update');
Route::get('/admr/aluno/delete/{id}', 'AlunosController@destroy');
Route::resource('/admr/aluno', 'AlunosController');

