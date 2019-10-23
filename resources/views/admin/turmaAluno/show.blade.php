@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Turma - {{$turma->nome}}</h1>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-top border-bottom">
        <h1 class="h2">Alunos</h1>
    </div>
    <div class="contanier-fluid">
        <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Aluno</th>
                    <th>Nascimento</th>
                    <th>Email</th>
                    <th class="no-sort"></th>
                    <th class="no-sort"></th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tbody>
                <?php $cont = 1;?>
                @foreach($alunos as $aluno)
                <form method='post' action="{{route('turmaaluno.store')}}">
                {!! csrf_field() !!}
                <input type="hidden" name="idTurma" value="{{$turma->id}}">
                    <tr>
                        <td>{{$cont}}</td>
                        <td><input type="hidden" name="idAluno" value="{{$aluno->id}}">{{$aluno->nome}}</td>
                        <td>{{$aluno->nascimento}}</td>
                        <td>{{$aluno->emailResponsavel}}</td>
                        <td>
                            <button class="btn btn-outline-dark" type="submit" >
                                <span data-feather="plus"></span>
                            </button>
                        </td>
                    </tr>
                </form>
                    <?php $cont ++; ?>
                @endforeach
            <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Aluno</th>
                    <th>Nascimento</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div> 
@endsection 