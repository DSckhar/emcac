@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Atualizar publicação</h1>
    </div>

    <div class="contanier-fluid">
        <form name="validar" method='post' enctype="multipart/form-data" action="{{route('publicacao.editado')}}">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}
                    <input id="id" class="form-control" type="text" name="id" value="{{$publicacoes->id}}" hidden required/>

                    <label for="titulo">Título da publicação</label>
                    <div class="form-group">
                        <input id="titulo" class="form-control" type="text" name="titulo" maxlength="30" value="{{$publicacoes->titulo}}" required/>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="dInicio">Data de início</label>
                            <div class="form-group">
                                <input id="dInicio" class="form-control" type="date" name="dInicio" value="{{$publicacoes->dInicio}}" required/>
                            </div>

                            <label for="dTermino">Data de término</label>
                            <div class="form-group">
                                <input id="dTermino" class="form-control" type="date" name="dTermino" value="{{$publicacoes->dTermino}}" required/>
                            </div>
                            <span id="dataTermino" class="text-danger mb-3"></span>
                        </div>

                        <div class="col-6">
                            <label for="hInicio">Hora de início</label>
                            <div class="form-group">
                                <input id="hInicio" class="form-control" type="time" name="hInicio" value="{{$publicacoes->hInicio}}" required/>
                            </div>

                            <label for="hTermino">Hora de término</label>
                            <div class="form-group">
                                <input id="hTermino" class="form-control" type="time" name="hTermino" value="{{$publicacoes->hTermino}}" required/>
                            </div>
                            <span id="horaTermino" class="text-danger mb-3"></span>
                        </div>
                    </div>

                    <label for="idTipoPublicacao">Tipo</label>
                    <div class="form-group">
                        <select id="idTipoPublicacao" class="form-control" name="idTipoPublicacao" required>
                            @foreach($tipos as $tipo)
                                @if($publicacoes->idTipoPublicacao == $tipo->id)
                                    <option selected value="{{$tipo->id}}">{{$tipo->nome}}</option>
                                @else
                                    <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <label for="descricao">Descrição</label>
                    <div class="form-group">
                        <textarea id="descricao" type="text" rows="10" class="form-control" name="descricao" maxlength="500" required>{{$publicacoes->descricao}}</textarea>
                    </div>

                    <!-- Valor arquivo bd -->
                    <input id="arquivoOld" class="form-control" type="text" name="arquivoOld" value="{{$publicacoes->arquivo}}" hidden/>
                    
                    <label for="arquivo">Arquivo</label>
                    <div class="form-group">
                        <input type="file" id="arquivo" name="arquivo" accept=".pdf"/>
                    </div> 
                    <span id="tamanhoArquivo" class="text-danger mb-3"></span>

                    <div class="row justify-content-center">
                        <div class="col-2">
                            <button type="submit" onclick = "return validarDataeHora();"   class="btn btn-outline-dark">Enviar</button>
                        </div>
                    </div>
                    <br/>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection