@extends('admin.admin') 
@section('adm')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Funcionários</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button class="btn btn-outline-dark" onclick="window.location.href='/admr/funcionario/cadastrar'" ><span data-feather="user-plus"></span></button>
    </div>
</div>

<div class="contanier-fluid">
    <table id="tabela" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nº</th>
                <th class="no-sort">Foto</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Formação</th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
            </tr>
        </thead>
        <tbody>
            <?php $cont = 1;?>
            @foreach($funcionarios as $funcionario)
            <tr>
                <td class="align-middle">{{$cont}}</td>
                <td class="align-middle">
                    @if($funcionario->foto == '')
                        <img src="{{asset('admin/media/funcionario/user.png')}}" class="img-thumbnail" width="50px">
                    @else
                        <img src='{{asset("storage/media/funcionarios/{$funcionario->foto}")}}' class="img-thumbnail" width="50px">
                    @endif
                </td>
                <td class="align-middle">{{$funcionario->nome}}</td>
                <td class="align-middle">{{$funcionario->cargo}}</td>
                <td class="align-middle">{{$funcionario->formacao}}</td>
                <td class="align-middle">
                    <button class="btn btn-outline-dark" onclick="window.location.href='/admr/funcionario/editar/{{$funcionario->id}}'" >
                        <span data-feather="edit"></span>
                    </button>
                </td>
                <td class="align-middle">
                    <button class="btn btn-outline-danger" onclick="window.location.href='/admr/funcionario/delete/{{$funcionario->id}}'" >
                        <span data-feather="trash-2"></span>
                    </button>
                </td>
            </tr>
            <?php $cont ++; ?>
            @endforeach
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Formação</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div> 
@endsection