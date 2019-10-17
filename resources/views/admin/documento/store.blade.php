@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Documento</h1>
    </div>
    <div class="contanier-fluid">
        <form name="validar" method='post' enctype="multipart/form-data"  action="/admr/documento/cadastrado">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}
                    <label for="titulo">Título</label>
                    <div class="form-group">
                        <input id="titulo" class="form-control" type="text" name="titulo" maxlength="60" required/>
                    </div>

                    <label for="ano">Ano</label>
                    <div class="form-group">
                        <input id="ano" class="form-control" type="number" name="ano" min="2010" max="{{ date('Y')}}" required/>
                    </div>

                    <label for="documento">Documento completo</label>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="arquivo" name="arquivo" required/>
                    </div>
                    <span id="tamanhoArquivo" class="text-danger mb-3"></span>
        
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-dark">Enviar</button>
                </div>
            </div>
            <br/>
        </form>
    </div>
@endsection