@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Aluno</h1>
    </div>

    <div class="contanier-fluid">
        <form method='post' action="{{route('aluno.store')}}">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}
                    <label for="nome">Nome</label>
                    <div class="form-group">
                        <input id="nome" class="form-control" type="text" name="nome" maxlength="60" required/>
                    </div>
                    <label for="nascimento">Data de Nascimento</label>
                    <div class="form-group">
                        <input id="nascimento" type="date"  class="form-control" name="nascimento" required/>
                    </div>
                    <label for="parentesco">Parentesco</label>
                    <div class="form-group">
                        <select id="parentesco" class="form-control" name="parentesco" required>
                            <option selected disabled hidden>Selecione o Grau de Parentesco</option>
                            <option value="Filho(a)">Filho(a)</option>
                            <option value="Enteado(a)">Enteado(a)</option>
                            <option value="Neto(a)">Neto(a)</option>
                            <option value="Sobrinho(a)">Sobrinho(a)</option>
                        </select>
                    </div>
                    <label for="nomeResponsavel">Nome do Responsavel</label>
                    <div class="form-group">
                        <input id="nomeResponsavel" class="form-control" type="text" name="nomeResponsavel" maxlength="60" required/>
                    </div>
                    <label for="emailResponsavel">Email</label>
                    <div class="form-group">
                        <input id="emailResponsavel" class="form-control" type="email" name="emailResponsavel" maxlength="60" required/>
                    </div>
                    <label for="telefoneResponsavel">Telefone</label>
                    <div class="form-group">
                        <input id="telefoneResponsavel" class="form-control" type="text" name="telefoneResponsavel" minlength="11" maxlength="11" pattern="[[0-9]]" placeholder="Ex:  77999999999" required/>
                    </div>
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