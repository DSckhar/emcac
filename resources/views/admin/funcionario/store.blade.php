@extends('admin.admin') 
@section('adm')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastrar Funcionário</h1>
</div>

<div class="contanier-fluid">
    <form method='post' enctype="multipart/form-data" action="{{route('funcionario.store')}}">
        <div class="row justify-content-center">
            <div class="col-6">
                {!! csrf_field() !!}
                <label for="nome">Nome</label>
                <div class="form-group">
                    <input id="nome" class="form-control" type="text" name="nome" maxlength="60" required/>
                </div>
                <label for="cargo">Cargo</label>
                <div class="form-group">
                    <select id="tipo" class="form-control" name="cargo" required>
                        <option selected disabled hidden>Selecione o cargo</option>
                        <option value="Diretor(a)">Diretor(a)</option>
                        <option value="Vice Diretor(a)">Vice Diretor(a)</option>
                        <option value="Secretário(a)">Secretário(a)</option>
                        <option value="Professor(a)">Professor(a)</option>
                    </select>
                </div>
                <label for="formacao">Formação</label>
                <div class="form-group">
                    <input id="formacao" type="text" class="form-control" name="formacao" required/>
                </div>

                <label for="foto">Foto:</label>
                <div class="form-group">
                    <input id="foto" class="form-control-file" type="file" name="foto"/>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
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
@endsection
