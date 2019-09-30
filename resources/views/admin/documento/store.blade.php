@extends('admin.admin') 
@section('adm')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
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
                                <label for="titulo">Título</label>
                                <div class="form-group">
                                    <input id="titulo" class="form-control" type="text" name="titulo" maxlength="60" required/>
                                </div>

                                <label for="ano">Ano</label>
                                <div class="form-group">
                                    <input id="ano" class="form-control" type="number" name="ano" min="2010" max="{{ date('Y')}}" required/>
                                </div>

                                <label for="documento">Documento completo</label>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="documento" name="documento"/>
                                </div>

                                <label for="capitulo1">Capitulo 1</label>
                                <div class="form-group">
                                    <textarea id="capitulo1" type="text" rows="10" class="form-control" name="capitulo1" required></textarea>
                                </div>

                                <label for="capitulo2">Capitulo 2</label>
                                <div class="form-group">
                                    <textarea id="capitulo2" type="text" rows="10" class="form-control" name="capitulo2" required></textarea>
                                </div>

                                <label for="capitulo3">Capitulo 3</label>
                                <div class="form-group">
                                    <textarea id="capitulo3" type="text" rows="10" class="form-control" name="capitulo3" required></textarea>
                                </div>

                                <label for="capitulo4">Capitulo 4</label>
                                <div class="form-group">
                                    <textarea id="capitulo4" type="text" rows="10" class="form-control" name="capitulo4" required></textarea>
                                </div>

                                <label for="capitulo5">Capitulo 5</label>
                                <div class="form-group">
                                    <textarea id="capitulo5" type="text" rows="10" class="form-control" name="capitulo5" required></textarea>
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