@extends('admin.admin') 
@section('adm')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar agenda</h1>
    </div>
    <div class="contanier-fluid">
        <form name="validar" method='post' action="/admr/agenda/editado">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}

                    <input id="id" class="form-control" type="text" name="id"value="{{$agenda->id}}" hidden/>

                    <label for="titulo">Título</label>
                    <div class="form-group">
                        <input id="titulo" class="form-control" type="text" name="titulo" maxlength="30" value="{{$agenda->titulo}}"  required/>
                    </div>

                    <label for="descricao">Descrição</label>
                    <div class="form-group">
                        <input id="descricao" type="text"  class="form-control" name="descricao" maxlength="100" value="{{$agenda->descricao}}" required/>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="dInicio">Data de início</label>
                            <div class="form-group">
                                <input id="dInicio" class="form-control" type="date" name="dInicio" value="{{$agenda->dInicio}}" required/>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="dTermino">Data de término</label>
                            <div class="form-group">
                                <input id="dTermino" class="form-control" type="date" name="dTermino" value="{{$agenda->dTermino}}" required/>
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
                                        @if($agenda->cor == '#17a2b8')
                                            <input type="radio" class="custom-control-input" id="info" name="cor" value="#17a2b8" checked>
                                        @else
                                            <input type="radio" class="custom-control-input" id="info" name="cor" value="#17a2b8">
                                        @endif
                                        <label class="custom-control-label" for="info"></label>
                                    </div>
                                </div><br/>
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-success">
                                        @if($agenda->cor == '#28a745')
                                            <input type="radio" class="custom-control-input" id="success" name="cor" value="#28a745" checked>
                                        @else
                                            <input type="radio" class="custom-control-input" id="success" name="cor" value="#28a745">
                                        @endif
                                        <label class="custom-control-label" for="success"></label>
                                    </div>
                                </div><br/>
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-secondary">
                                        @if($agenda->cor == '#6c757d')
                                            <input type="radio" class="custom-control-input" id="secondary" name="cor" value="#6c757d" checked>
                                        @else
                                            <input type="radio" class="custom-control-input" id="secondary" name="cor" value="#6c757d">
                                        @endif
                                        <label class="custom-control-label" for="secondary"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-danger">
                                        @if($agenda->cor == '#dc3545')
                                        <input type="radio" class="custom-control-input" id="danger" name="cor" value="#dc3545" checked>
                                        @else
                                        <input type="radio" class="custom-control-input" id="danger" name="cor" value="#dc3545">
                                        @endif
                                        <label class="custom-control-label" for="danger"></label>
                                    </div>
                                </div><br/>
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-warning">
                                        @if($agenda->cor == '#ffc107')
                                        <input type="radio" class="custom-control-input" id="warning" name="cor" value="#ffc107" checked>
                                        @else
                                        <input type="radio" class="custom-control-input" id="warning" name="cor" value="#ffc107">
                                        @endif
                                        <label class="custom-control-label" for="warning"></label>
                                    </div>
                                </div><br/>
                                <div class="custom-control custom-radio text-white">
                                    <div class="bg-dark">
                                        @if($agenda->cor == '#343a40')
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked" name="cor" value="#343a40" checked>
                                        @else
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked" name="cor" value="#343a40">
                                        @endif
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