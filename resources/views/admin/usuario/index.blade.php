@extends('admin.admin') 
@section('adm')
@if($user->nivel == '2')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Usuários</h1>
</div>

<div class="contanier-fluid">
    <table id="tabela" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
            </tr>
        </thead>
        <tbody>
            <?php $cont = 1;?>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$cont}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                @if($usuario->nivel == '2')
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='{{route('usuario.desabilitar', $usuario->id)}}'" >
                        Desabilitar Usuário
                    </button>
                </td>
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='/admr/usuario/padrao/{{$usuario->id}}'" >
                        Tornar Usuário Padrão    
                    </button>
                </td>
                @elseif($usuario->nivel == '1')
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='{{route('usuario.desabilitar', $usuario->id)}}'" >
                        Desabilitar Usuário
                    </button>
                </td>
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='/admr/usuario/adiministrador/{{$usuario->id}}'" >
                        Tornar Adiminitrador    
                    </button>
                </td>
                @else
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='/admr/usuario/habilitar/{{$usuario->id}}'" >
                        Habilitar Usuário
                    </button>
                </td>
                <td></td>
                @endif
            </tr>
            <?php $cont ++; ?>
            @endforeach
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>
@else
<div class="contanier-fluid">
    <div class="row justify-content-center">
        <div class="col-4">
            <br/><br/><br/><br/>
            <h3>Você não tem autorização para vizualizar esta página</h3>
        </div>
    </div>
</div>
@endif
@endsection