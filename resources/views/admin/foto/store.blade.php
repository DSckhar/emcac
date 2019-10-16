@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar foto na publicação - {{$publicacao->titulo}}</h1>
    </div>

    <div class="contanier-fluid">
        <form name="validar" method='post' enctype="multipart/form-data" action="/admr/foto/cadastrado">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}

                    <label for="descricao">Descrição da imagem</label>
                    <div class="form-group">
                        <textarea id="descricao" type="text" rows="2" class="form-control" name="descricao" maxlength="500" required></textarea>
                    </div>

                    <label for="arquivo">Imagem</label>
                    <div class="form-group">
                        <input type="file" id="arquivo" name="arquivo" accept="image/*" required/>
                    </div>  
                    <span id="tamanhoArquivo" class="text-danger mb-3"></span>

                    <input id="idPublicacao" class="form-control" type="text" name="idPublicacao" value="{{$publicacao->id}}" hidden required/>
                            
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <button type="submit" class="btn btn-outline-dark">Enviar</button>
                        </div>
                    </div>
                    <br/>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection