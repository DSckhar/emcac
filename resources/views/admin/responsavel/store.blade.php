@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Responsável</h1>
    </div>

    <div class="contanier-fluid">
        <form name="validar" method='post' action="/admr/responsavel/cadastrado">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}
                    <label for="nome">Nome</label>
                    <div class="form-group">
                        <input id="nome" class="form-control" type="text" name="nome" maxlength="60" required/>
                    </div>

                    <label for="cpf">CPF</label>
                    <div class="form-group">
                        <input id="cpf" class="form-control" type="number" name="cpf" placeholder="Digita o CPF sem pontuação"  required/>
                        <span id="CpfInvalido"></span>
                    </div>

                    <label for="telefone">Telefone</label>
                    <div class="form-group">
                        <input id="telefone" class="form-control" type="tel" name="telefone" maxlength="20" required/>
                    </div>

                    <label for="email">Email</label>
                    <div class="form-group">
                        <input id="email" class="form-control" type="email" name="email" maxlength="40" required/>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <button type="submit" onclick="return validarCPF();" class="btn btn-outline-dark">Enviar</button>
                </div>
            </div>
            <br/>
        </form>
    </div>

    <footer>
        <script src="{{asset('admin/assets/js/validacao.js')}}"></script>
    </footer>
@endsection