@extends('admin.admin') 
@section('adm')
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR TURMA</h3>
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
                                <label for="titulo">Título da turma</label>
                                <div class="form-group">
                                    <input id="titulo" class="form-control" type="text" name="titulo" maxlength="100" required/>
                                </div>

                                <label for="ano">Ano</label>
                                <div class="form-group">
                                    <input id="ano" class="form-control" type="number" name="ano" placeholder="Ex: 2019" required/>
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