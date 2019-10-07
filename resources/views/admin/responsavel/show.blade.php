@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Responsável - {{$responsavel->nome}}</h1>
        <div>
            <button class="btn btn-outline-dark" onclick="window.location.href='/admr/responsavel/editar/{{$responsavel->id}}'" >
                <span data-feather="edit"></span>
            </button>
            <button class="btn btn-outline-danger" onclick="window.location.href='/admr/responsavel/deletar/{{$responsavel->id}}'" >
                <span data-feather="trash-2"></span>
            </button>
        </div>
    </div>
    <div class="contanier-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$responsavel->cpf}}</td>
                            <td>{{$responsavel->telefone}}</td>
                            <td>{{$responsavel->email}}</td>
                        </tr>
                    </tbody>
                </table>                                
                <br/>
            </div>
        </div>
    </div> <br/>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-top border-bottom">
        <h1 class="h2">Alunos Associados</h1>
    </div>
    <div class="contanier-fluid">
        <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Nome</th>
                    <th>Parentesco</th>
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
                    <td>{{$aluno->parentesco}}</td>
                    <td>
                        <button class="btn btn-outline-dark" onclick="window.location.href='/admr/aluno/{{$aluno->id}}'" >
                            <span data-feather="eye"></span>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-outline-dark" onclick="window.location.href='/admr/responsavel/editar/{{$aluno->id}}'" >
                            <span data-feather="edit"></span>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger" onclick="window.location.href='/admr/responsavel/deletar/'" >
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
                    <th>Parentesco</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div> 
@endsection 