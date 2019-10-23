@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar capítulo no documento - {{$documento->titulo}}</h1>
    </div>
    <div class="contanier-fluid">
        <form method='post' action="{{route('capitulo.store')}}">
            <div class="row justify-content-center">
                <div class="col-10">
                    {!! csrf_field() !!}

                    <input id="idDocumento" class="form-control" type="text" name="idDocumento" value="{{$documento->id}}" hidden required/>

                    <label for="titulo">Digite o título do capítulo</label>
                    <div class="form-group">
                        <input id="titulo" type="text" maxlength="50" class="form-control" name="titulo" required/>
                    </div>

                    <label for="descricao">Digite o texto do capítulo</label>
                    <div class="form-group">
                        <textarea id="descricao" type="text" rows="25" class="form-control" name="descricao" required></textarea>
                    </div>
        
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-dark">Enviar</button>
                </div>
            </div>
            <br/>
        </form>
    </div>

    <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
    <script>
            CKEDITOR.replace('descricao');
    </script>
@endsection