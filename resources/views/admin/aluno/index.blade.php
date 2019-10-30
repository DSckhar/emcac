@extends('admin.admin') 
@section('adm')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Alunos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button title="Adicionar Aluno" class="btn btn-outline-dark" onclick="window.location.href='{{route('aluno.create')}}'" ><span data-feather="user-plus"></span></button>
    </div>
</div>

<div class="contanier-fluid">
    <table id="tabela" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
            </tr>
        </thead>
        <tbody>
            <?php $cont = 1;?>
            @foreach($alunos as $aluno)
            <tr>
                <td>{{$cont}}</td>
                <td>{{$aluno->nome}}</td>
                <td>
                    <button title="Visualizar Aluno" class="btn btn-outline-dark" onclick="window.location.href='{{route('aluno.show', $aluno->id)}}'" >
                        <span data-feather="eye"></span>
                    </button>
                </td>
                <td>
                    <button title="Editar Aluno" class="btn btn-outline-dark" onclick="window.location.href='{{route('aluno.edit', $aluno->id)}}'" >
                        <span data-feather="edit"></span>
                    </button>
                </td>
                <td>
                    <button title="Apagar Aluno" class="btn btn-outline-danger" onclick="window.location.href='{{route('aluno.delete', $aluno->id)}}'" >
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
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div> 
@endsection