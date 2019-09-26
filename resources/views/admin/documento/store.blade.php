@extends('admin.admin') 
@section('adm')
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR DOCUMENTO</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    
                </div>
            </div>
            <div class="block-content">
                <div class="contanier-fluid">
                    <form method='post' action="/aluno/cadastrado">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                {!! csrf_field() !!}
                                <label for="descricao">Descrição</label>
                                <div class="form-group">
                                    <input id="descricao" class="form-control" type="text" name="descricao" maxlength="100" required/>
                                </div>

                                <label for="documento">Documento completo</label>
                                <div class="form-group">
                                    <input type="file" name="documento"/>
                                </div>

                                <label for="capitulo1">Capitulo 1</label>
                                <div class="form-group">
                                    <textarea id="capitulo1" type="text" rows="10" class="form-control" name="capitulo1" required></textarea>
                                </div>

                                <label for="capitulo2">Capitulo 2</label>
                                <div class="form-group">
                                    <textarea id="capitulo2" type="text" rows="10" class="form-control" name="capitulo2" required></textarea>
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