@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar agenda</h1>
    </div>
    <div class="contanier-fluid">
        <form name="validar" method='post' action="/admr/agenda/cadastrado">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}
                    <label for="titulo">Título</label>
                    <div class="form-group">
                        <input id="titulo" class="form-control" type="text" name="titulo" maxlength="30" required/>
                    </div>

                    <label for="descricao">Descrição</label>
                    <div class="form-group">
                        <input id="descricao" type="text"  class="form-control" name="descricao" maxlength="100" required/>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="dInicio">Data de início</label>
                            <div class="form-group">
                                <input id="dInicio" class="form-control" type="date" name="dInicio" min="{{ date('Y-m-d')}}" required/>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="dTermino">Data de término</label>
                            <div class="form-group">
                                <input id="dTermino" class="form-control" type="date" name="dTermino" min="{{ date('Y-m-d')}}" required/>
                            </div>
                            <span id="dataTermino" class="text-danger"></span>
                        </div>
                    </div>

                    <label for="cor">Selecione uma cor para agenda</label>
                    <div class="form-group">
                        <div class="row justify-content-between">
                            <div class="col-5">
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-info">
                                        <input type="radio" class="custom-control-input" id="info" name="cor" value="#17a2b8">
                                        <label class="custom-control-label" for="info"></label>
                                    </div>
                                </div><br/>
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-success">
                                        <input type="radio" class="custom-control-input" id="success" name="cor" value="#28a745">
                                        <label class="custom-control-label" for="success"></label>
                                    </div>
                                </div><br/>
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-secondary">
                                        <input type="radio" class="custom-control-input" id="secondary" name="cor" value="#6c757d">
                                        <label class="custom-control-label" for="secondary"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-danger">
                                        <input type="radio" class="custom-control-input" id="danger" name="cor" value="#dc3545">
                                        <label class="custom-control-label" for="danger"></label>
                                    </div>
                                </div><br/>
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-warning">
                                        <input type="radio" class="custom-control-input" id="warning" name="cor" value="#ffc107">
                                        <label class="custom-control-label" for="warning"></label>
                                    </div>
                                </div><br/>
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-dark">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked" name="cor" value="#343a40">
                                        <label class="custom-control-label" for="defaultUnchecked"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" onclick = "return validarData();" class="btn btn-outline-dark">Enviar</button>
            </div>
            <br/>
        </form>
    </div>
@endsection