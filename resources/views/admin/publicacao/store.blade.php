@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar publicação</h1>
    </div>

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
                            <label for="dInicio">Data de início</label>
                            <div class="form-group">
                                <input id="dInicio" class="form-control" type="date" name="dInicio" min="{{ date('Y-m-d')}}" required/>
                            </div>

                            <label for="dTermino">Data de término</label>
                            <div class="form-group">
                                <input id="dTermino" class="form-control" type="date" name="dTermino" min="{{ date('Y-m-d')}}" required/>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="hInicio">Hora de início</label>
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
                            
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <button type="submit" class="btn btn-outline-dark">Enviar</button>
                        </div>
                    </div>
                    <br/>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection