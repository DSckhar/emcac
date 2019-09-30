@extends('admin.admin') 
@section('adm')
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR FUNCIONÁRIO</h3>
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