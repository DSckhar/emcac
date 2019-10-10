@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tipos de Publicação</h1>
    </div>
    <div class="contanier-fluid">
        <div class="row justify-content-between">
            <div class="col-3"><br/>
                <h5 style="text-align: center">Novo Tipo de Publicação</h5>
                <form name="validar" method='post' action="/admr/tipopublicacao/cadastrado">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text" name="nome" maxlength="20" required/>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 justify-content-center">
                            <button type="submit" class="btn btn-outline-dark">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-8">
            <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Nome</th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tbody>
                <?php $cont = 1;?>
                @foreach($tipopublicacoes as $tipopublicacao)
                    <tr>
                        <td>{{$cont}}</td>
                        <td>{{$tipopublicacao->nome}}</td>
                        <td>
                            <button class="btn btn-outline-danger" onclick="window.location.href='/admr/tipopublicacao/delete/{{$tipopublicacao->id}}'" >
                                <span data-feather="trash-2"></span>
                            </button>
                        </td>
                    </tr>
                    <?php $cont ++; ?>
                @endforeach
            <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Nome</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
            </div>
        </div>
        
    </div> 
    <div class="contanier-fluid">
        
    </div>

    
@endsection 