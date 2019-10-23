@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Turma - {{$turma->nome}}</h1>
        <div>
            <button class="btn btn-outline-dark" onclick="window.location.href='{{route('turma.edit', $turma->id)}}'" >
                <span data-feather="edit"></span>
            </button>
            <button class="btn btn-outline-danger" onclick="window.location.href='{{route('turma.delete', $turma->id)}}'" >
                <span data-feather="trash-2"></span>
            </button>
        </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-top border-bottom">
        <h1 class="h2">Alunos</h1>
        <div>
        <button class="btn btn-outline-dark" onclick="window.location.href='{{route('turmaaluno.show', $turma->id)}}'" >Adicionar Alunos</button>
        </div>
    </div>
    <div class="contanier-fluid">
        <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Aluno</th>
                    <th>Nascimento</th>
                    <th>Responsavel</th>
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
                        <td></td>
                    </tr>
                    <?php $cont ++; ?>
                @endforeach
            <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Aluno</th>
                    <th>Nascimento</th>
                    <th>Responsavel</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div> 
@endsection 