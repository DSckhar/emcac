@extends('admin.admin') 
@section('adm')
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR AGENDA</h3>
            </div>
            <div class="block-content">
                <div class="contanier-fluid">
                    <form method='post' action="/admr/agenda/cadastrado">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                {!! csrf_field() !!}
                                <label for="titulo">Título</label>
                                <div class="form-group">
                                    <input id="titulo" class="form-control" type="text" name="titulo" maxlength="30" required/>
                                </div>

                                <label for="descricao">Descrição</label>
                                <div class="form-group">
                                    <input id="descricao" type="text"  class="form-control" name="descricao" maxlength="100" required/>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="dInicio">Data de inicio</label>
                                        <div class="form-group">
                                            <input id="dInicio" class="form-control" type="date" name="dInicio" min="{{ date('Y-m-d')}}" required/>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="dTermino">Data de término</label>
                                        <div class="form-group">
                                            <input id="dTermino" class="form-control" type="date" name="dTermino" min="{{ date('Y-m-d')}}" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection