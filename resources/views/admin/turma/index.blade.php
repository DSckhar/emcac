@extends('admin.admin') 
@section('adm')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Turmas</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button class="btn btn-outline-dark" onclick="window.location.href='/admr/turma/cadastrar'" ><span data-feather="user-plus"></span></button>
    </div>
</div>

<div class="contanier-fluid">
    <table id="tabela" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th>Ano</th>
                <th>Status</th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
            </tr>
        </thead>
        <tbody>
            <?php $cont = 1;?>
            @foreach($turmas as $turma)
            <tr>
                <td>{{$cont}}</td>
                <td>{{$turma->nome}}</td>
                <td>{{$turma->ano}}</td>
                <td>{{$turma->status}}</td>
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='/admr/turma/editar/{{$turma->id}}'" >
                        <span data-feather="edit"></span>
                    </button>
                </td>
                <td>
                    <button class="btn btn-outline-danger" onclick="window.location.href='/admr/turma/delete/{{$turma->id}}'" >
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
                <th>Ano</th>
                <th>Status</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div> 
@endsection