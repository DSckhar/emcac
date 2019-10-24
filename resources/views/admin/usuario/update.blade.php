@extends('admin.admin') 
@section('adm')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Perfil de Usuário</h1>
</div>
<div class="contanier-fluid">
    <form method='post' enctype="multipart/form-data" action="{{route('usuario.editado')}}">
        <div class="row justify-content-center">
            <div class="col-6">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{$user->id}}">
                <label for="name">Nome</label>
                <div class="form-group">
                    <input id="name" class="form-control" type="text" name="name" maxlength="30" value="{{$user->name}}" required/>
                </div>
                
                <label for="email">E-Mail</label>
                <div class="form-group">
                    <input id="email" type="text" class="form-control" name="email" value="{{$user->email}}" required/>
                </div>
                <label for="tipo">Tipo de Usuário</label>
                <div class="form-group">
                    <input id="tipo" type="text" class="form-control" name="formacao" value="{{$user->tipo}}" disabled/>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                @if(session('mensagem'))
                    <div class="alert alert-danger">
                        <span>{{session('mensagem')}}</span>
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
            <button type="submit" class="btn btn-outline-dark">Enviar</button>
            </div>
        </div>
        <br/>
    </form>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-top">
    <h1 class="h2">Alterar Senha</h1>
</div>
<div class="contanier-fluid">
    <form name="alterarSenha" method='post' enctype="multipart/form-data" action="{{route('usuario.passwordEditado')}}">
        <div class="row justify-content-center">
            <div class="col-6">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{$user->id}}">
                <label for="passwordAntiga">Senha Antiga</label>
                <div class="form-group">
                    <input id="passwordAntiga" class="form-control" type="password" name="passwordAntiga" minlength="8" maxlength="30" required/>
                </div>
                
                <label for="passwordNova">Nova Senha</label>
                <div class="form-group">
                    <input id="passwordNova" type="password" class="form-control" name="passwordNova" minlength="8" maxlength="30" required/>
                </div>
                <label for="passwordConfirme">Confirme Nova Senha</label>
                <div class="form-group">
                    <input id="passwordConfirme" type="password" class="form-control" name="passwordConfirme" minlength="8" maxlength="30" required/>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                @if(session('mensagemSenha'))
                    <div class="alert alert-danger">
                        <span>{{session('mensagemSenha')}}</span>
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
            <button onclick="return validarSenha();" type="submit" class="btn btn-outline-dark">Enviar</button>
            </div>
        </div>
        <br/>
    </form>
</div>
@endsection
