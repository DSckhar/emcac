@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Enviar e-mail para o responsável - {{$aluno['nomeResponsavel']}}</h1>
    </div>

    <div class="contanier-fluid">
        <form name="validar" method='post' enctype="multipart/form-data" action="{{route('email.store')}}">
            <div class="row justify-content-center">
                <div class="col-6">
                    {!! csrf_field() !!}

                    <input id="id" class="form-control" type="text" name="id" value="{{$aluno['id']}}" hidden required/>
                    <input id="emailResponsavel" class="form-control" type="text" name="emailResponsavel" value="{{$aluno['emailResponsavel']}}" hidden required/>
                    <input id="nomeResponsavel" class="form-control" type="text" name="nomeResponsavel" value="{{$aluno['nomeResponsavel']}}" hidden required/>

                    <label for="mensagem">Mensagem</label>
                    <div class="form-group">
                        <textarea id="mensagem" type="text" rows="2" class="form-control" name="mensagem" maxlength="500">Boletim do aluno: {{$aluno['nome']}}</textarea>
                    </div>

                    <label for="arquivo">Anexo</label>
                    <div class="form-group">
                        <input type="file" id="arquivo" name="arquivo" accept="image/*, .pdf" required/>
                    </div>  
                    <span id="tamanhoArquivo" class="text-danger mb-3"></span>
       
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