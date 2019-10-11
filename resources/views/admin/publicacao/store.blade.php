@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar publicação</h1>
    </div>

    <div class="contanier-fluid">
        <form name="validar" method='post' enctype="multipart/form-data" action="/admr/publicacao/cadastrado">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}
                    <label for="titulo">Título da publicação</label>
                    <div class="form-group">
                        <input id="titulo" class="form-control" type="text" name="titulo" maxlength="30" required/>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="dInicio">Data de início</label>
                            <div class="form-group">
                                <input id="dInicio" class="form-control" type="date" name="dInicio" min="{{ date('Y-m-d')}}" required/>
                            </div>

                            <label for="dTermino">Data de término</label>
                            <div class="form-group">
                                <input id="dTermino" class="form-control" type="date" name="dTermino" min="{{ date('Y-m-d')}}" required/>
                            </div>
                            <span id="dataTermino" class="text-danger mb-3"></span>
                        </div>

                        <div class="col-6">
                            <label for="hInicio">Hora de início</label>
                            <div class="form-group">
                                <input id="hInicio" class="form-control" type="time" name="hInicio" required/>
                            </div>

                            <label for="hTermino">Hora de término</label>
                            <div class="form-group">
                                <input id="hTermino" class="form-control" type="time" name="hTermino" required/>
                            </div>
                            <span id="horaTermino" class="text-danger mb-3"></span>
                        </div>
                    </div>

                    <label for="idTipoPublicacao">Tipo</label>
                    <div class="form-group">
                        <select id="idTipoPublicacao" class="form-control" name="idTipoPublicacao" required>
                            <option selected disabled hidden>Selecione o tipo</option>
                            @foreach($tipos as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <label for="descricao">Descrição</label>
                    <div class="form-group">
                        <textarea id="descricao" type="text" rows="10" class="form-control" name="descricao" maxlength="500" required></textarea>
                    </div>

                    <label for="arquivo">Arquivo</label>
                    <div class="form-group">
                        <input type="file" id="arquivo" name="arquivo"/>
                    </div> 
                            
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <button type="submit" onclick = "return validarDataeHora();"  class="btn btn-outline-dark">Enviar</button>
                        </div>
                    </div>
                    <br/>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection