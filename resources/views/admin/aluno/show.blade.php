@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Aluno(a) - {{$aluno->nome}}</h1>
        <div>
            <button class="btn btn-outline-dark" onclick="window.location.href='/admr/aluno/editar/{{$aluno->id}}'" >
                <span data-feather="edit"></span>
            </button>
            <button class="btn btn-outline-danger" onclick="window.location.href='/admr/aluno/delete/{{$aluno->id}}'" >
                <span data-feather="trash-2"></span>
            </button>
        </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-top border-bottom">
        <h1 class="h2">Dados do(a) Aluno(a)</h1>
        <div>
            <button class="btn btn-outline-dark" onclick="window.location.href='/admr/aluno/cadastrar/'" >
                <span data-feather="user-plus"></span>
            </button>
        </div>
    </div>
    <div class="contanier-fluid">
        <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nascimento</th>
                    <th>Parentesco</th>
                    <th>Responsavel</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->nascimento}}</td>
                    <td>{{$aluno->parentesco}}</td>
                    <td>{{$aluno->nomeResponsavel}}</td>
                    <td>{{$aluno->emailResponsavel}}</td>
                    <td>{{$aluno->telefoneResponsavel}}</td>
                </tr>
            </tbody>
        </table>
    </div> 
@endsection 