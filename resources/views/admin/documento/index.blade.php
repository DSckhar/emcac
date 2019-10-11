@extends('admin.admin') 
@section('adm')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Documentos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button class="btn btn-outline-dark" onclick="window.location.href='/admr/documento/cadastrar'" ><span data-feather="plus"></span></button>
    </div>
</div>

<div class="contanier-fluid">
    <table id="tabela" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nº</th>
                <th>Título</th>
                <th>Ano</th>
                <th>Inserção no Sistema</th>
                <th>Última Atualização</th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
            </tr>
        </thead>
        <tbody>
            <?php $cont = 1;?>
            @foreach($documentos as $documento)
            <tr>
                <td>{{$cont}}</td>
                <td>{{$documento->titulo}}</td>
                <td>{{$documento->ano}}</td>
                <td>{{date('d/m/Y', strtotime($documento->created_at))}}</td>
                <td>{{date('d/m/Y', strtotime($documento->updated_at))}}</td>
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='/admr/documento/{{$documento->id}}'" >
                        <span data-feather="eye"></span>
                    </button>
                </td>
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='/admr/documento/editar/{{$documento->id}}'" >
                        <span data-feather="edit"></span>
                    </button>
                </td>
                <td>
                    <button class="btn btn-outline-danger" onclick="window.location.href='/admr/documento/delete/{{$documento->id}}'" >
                        <span data-feather="trash-2"></span>
                    </button>
                </td>
            </tr>
            <?php $cont ++; ?>
            @endforeach
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>Título</th>
                <th>Ano</th>
                <th>Inserção no Sistema</th>
                <th>Última Atualização</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div> 
@endsection