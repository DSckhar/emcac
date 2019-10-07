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
                    <form method='post' action="/admr/publicacao/cadastrado">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                {!! csrf_field() !!}
                                <label for="titulo">Título da publicação</label>
                                <div class="form-group">
                                    <input id="titulo" class="form-control" type="text" name="titulo" maxlength="30" required/>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="dInicio">Data de inicio</label>
                                        <div class="form-group">
                                            <input id="dInicio" class="form-control" type="date" name="dInicio" min="{{ date('Y-m-d')}}" required/>
                                        </div>

                                        <label for="dTermino">Data de término</label>
                                        <div class="form-group">
                                            <input id="dTermino" class="form-control" type="date" name="dTermino" min="{{ date('Y-m-d')}}" required/>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="hInicio">Hora de inicio</label>
                                        <div class="form-group">
                                            <input id="hInicio" class="form-control" type="time" name="hInicio" required/>
                                        </div>

                                        <label for="hTermino">Hora de término</label>
                                        <div class="form-group">
                                            <input id="hTermino" class="form-control" type="time" name="hTermino" required/>
                                        </div>
                                    </div>
                                </div>

                                <label for="tipo">Tipo</label>
                                <div class="form-group">
                                    <select id="tipo" class="form-control" name="tipo" required>
                                        <option selected disabled hidden>Selecione o tipo</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                        <option value="Tipo 3">Tipo 3</option>
                                    </select>
                                </div>

                                <label for="descricao">Descrição</label>
                                <div class="form-group">
                                    <textarea id="descricao" type="text" rows="10" class="form-control" name="descricao" maxlength="500" required></textarea>
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