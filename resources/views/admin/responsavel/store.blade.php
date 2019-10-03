@extends('admin.admin') 
@section('adm')
    <script src="{{asset('admin/assets/js/validacao.js')}}"></script>
    
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR RESPONSAVEL</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    
                </div>
            </div>
            <div class="block-content">
                <div class="contanier-fluid">
                    <form name="validar" method='post' action="/aluno/cadastrado">
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
                                <button type="submit" onclick="return validarCPF();" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                        <br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection