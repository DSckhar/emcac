@extends('admin.admin') 
@section('adm')
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR PUBLICAÇÃO</h3>
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
                                <label for="titulo">Título da publicação</label>
                                <div class="form-group">
                                    <input id="titulo" class="form-control" type="text" name="titulo" maxlength="100" required/>
                                </div>

                                <label for="tipo">Tipo</label>
                                <div class="form-group">
                                    <select id="tipo" class="form-control" name="tipo">
                                        <option selected disabled hidden>Selecione o tipo</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                        <option value="Tipo 3">Tipo 3</option>
                                    </select>
                                </div>

                                <label for="texto">Texto</label>
                                <div class="form-group">
                                    <textarea id="texto" type="text" rows="10" class="form-control" name="texto" required></textarea>
                                </div>

                                <label for="img">Imagem principal</label>
                                <div class="form-group">
                                    <input type="file" name="img"/>
                                </div>  
                                
                                <p class="text-center">Imagens secundarias</p>
                                 
                                <label for="img1">Imagem 1</label>
                                <div class="form-group">
                                    <input type="file" name="img1"/>
                                </div> 
                                 
                                <label for="img2">Imagem 2</label>
                                <div class="form-group">
                                    <input type="file" name="img2"/>
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