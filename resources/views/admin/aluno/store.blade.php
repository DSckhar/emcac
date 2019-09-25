@extends('admin.admin') 
@section('adm')
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR ALUNO</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    
                </div>
            </div>
            <div class="block-content">
                <div class="contanier-fluid">
                    <form method='post' action="/aluno/cadastrado">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                {!! csrf_field() !!}
                                <label for="nome">Nome</label>
                                <div class="form-group">
                                    <input id="nome" class="form-control" type="text" name="nome" maxlength="60" required/>
                                </div>
                                <label for="nascimento">Data de Nascimento</label>
                                <div class="form-group">
                                    <input id="nascimento" type="date"  class="form-control" name="dataNasc" required/>
                                </div>
                                <label for="responsavel">Responsável</label>
                                <div class="form-group">
                                    <input id="responsavel" type="text" class="form-control" name="idResponsavel" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">Enviar</button>
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