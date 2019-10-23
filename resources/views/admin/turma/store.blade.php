@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Turma</h1>
    </div>
    
    <div class="contanier-fluid">
        <form method='post' action="{{route('turma.store')}}">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}
                    <label for="titulo">Título da turma</label>
                    <div class="form-group">
                        <input id="nome" class="form-control" type="text" name="nome" maxlength="100" required/>
                    </div>
                    <label for="ano">Ano</label>
                    <div class="form-group">
                        <input id="ano" class="form-control" type="number" name="ano" min="2010" max="{{ date('Y')+1}}" placeholder="Ex: 2019" required/>
                    </div>
                    <label for="ano">Status</label>
                    <div class="form-group">
                        <input id="status" class="form-control" type="text" name="status" maxlength="16" required/>
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
@endsection