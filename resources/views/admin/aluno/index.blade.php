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
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$aluno->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Aluno: <strong>{{$aluno->nome}}</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="card-text">Responsável: <strong>{{$aluno->nomeResponsavel}}</strong></p>
                    <p class="card-text">Nascimento: <strong>{{date('d/m/Y', strtotime($aluno->nascimento))}}</strong></p>
                    <p class="card-text">Parentesco: <strong>{{$aluno->parentesco}}</strong></p>
                    <p class="card-text">Email: <strong>{{$aluno->emailResponsavel}}</strong></p>
                    <p class="card-text">Telefone: <strong>{{$aluno->telefoneResponsavel}}</strong></p>
                </div>
                <div class="modal-footer">
                    <button title="Enviar Boletim" class="btn btn-outline-dark" onclick="window.location.href='{{route('email.enviar', $aluno->id)}}'" >
                        <span data-feather="mail"></span>
                    </button>
                    <button title="Editar Aluno" class="btn btn-outline-dark" onclick="window.location.href='{{route('aluno.edit', $aluno->id)}}'" >
                        <span data-feather="edit"></span>
                    </button>
                    <button title="Apagar Aluno" class="btn btn-outline-danger" onclick="window.location.href='{{route('aluno.delete', $aluno->id)}}'" >
                        <span data-feather="trash-2"></span>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <tr>
                <td>{{$cont}}</td>
                <td>{{$aluno->nome}}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button title="Visualizar Aluno" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal{{$aluno->id}}">
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