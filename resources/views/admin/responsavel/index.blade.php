@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Responsáveis</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-outline-dark" onclick="window.location.href='/admr/responsavel/cadastrar'" ><span data-feather="user-plus"></span></button>
        </div>
    </div>
    
    <div class="contanier-fluid">
        <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th class="no-sort"></th>
                    <th class="no-sort"></th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tbody>
                <?php $cont = 1;?>
                @foreach($responsaveis as $responsavel)
                <tr>
                    <td>{{$cont}}</td>
                    <td>{{$responsavel->nome}}</td>
                    <td>{{$responsavel->cpf}}</td>
                    <td>{{$responsavel->telefone}}</td>
                    <td>{{$responsavel->email}}</td>
                    <td>Visualizar</td>
                    <td>Editar</td>
                    <td>Excluir</td>
                </tr>
                <?php $cont ++; ?>
                @endforeach
            <tfoot>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>

    
@endsection 