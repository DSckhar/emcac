@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Publicação - {{$publicacao->titulo}}</h1>
        <div>
            <button class="btn btn-outline-dark" onclick="window.location.href='/admr/publicacao/editar/{{$publicacao->id}}'" >
                <span data-feather="edit"></span>
            </button>
            <button class="btn btn-outline-danger" onclick="window.location.href='/admr/publicacao/deletar/{{$publicacao->id}}'" >
                <span data-feather="trash-2"></span>
            </button>
        </div>
    </div>
    <div class="contanier-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="mb-3 text-justific">
                    <b>Descrição</b><br>
                    <p class="text-justify">{{$publicacao->descricao}}</p>
                </div>
                <table class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Data inicio</th>
                            <th>Data Termino</th>
                            <th>Hora inicio</th>
                            <th>Hora Termino</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$publicacao->tipo}}</td>
                            <td>{{$publicacao->dInicio}}</td>
                            <td>{{$publicacao->dTermino}}</td>
                            <td>{{$publicacao->hInicio}}</td>
                            <td>{{$publicacao->hTermino}}</td>
                        </tr>
                    </tbody>
                </table>                                
                <br/>
            </div>
        </div>
    </div> <br/>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-top border-bottom">
        <h1 class="h2">Fotos Associadas</h1>
        <div>
            <button class="btn btn-outline-dark" onclick="window.location.href='/admr/foto/cadastrar/{{$publicacao->id}}'" >
                <span data-feather="plus"></span>
            </button>
        </div>
    </div>
    <div class="contanier-fluid">
        <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Descrção</th>
                    <th class="no-sort">Foto</th>
                    <th class="no-sort"></th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tbody>
                <?php $cont = 1;?>
                @foreach($fotos as $foto)
                <tr>
                    <td>{{$cont}}</td>
                    <td>{{$foto->descricao}}</td>
                    <td><img width="50px" src='{{asset("storage/media/fotos/{$foto->arquivo}")}}' alt="{{ $foto->descricao }}"></td>
                    <td>
                        <button class="btn btn-outline-dark" onclick="window.location.href='{{asset("storage/media/fotos/{$foto->arquivo}")}}'" >
                            <span data-feather="eye"></span>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger" onclick="window.location.href='/admr/foto/delete/{{$foto->id}}'" >
                            <span data-feather="trash-2"></span>
                        </button>
                    </td>
                </tr>
                <?php $cont ++; ?>
                @endforeach
            <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Descrição</th>
                    <th>Foto</th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div> 
@endsection 