@extends('site.site') 
@section('site')
    <!-- conteudo -->
    <div class="container mt-3 mb-3">
        <div class="mt-3 mb-3">
            <!-- Diretoria -->
            <h4> Diretoria </h4>        
            <div class="row">
                @foreach($funcionarios as $diretoria)
                    @if(($diretoria->cargo == 'Diretor(a)')||($diretoria->cargo == 'Vice Diretor(a)'))
                        <div class="col-sm-6 mt-3">
                            <div class="card h-100">
                                <div class="row">
                                    <div class="col-md-4">
                                        @if($diretoria->foto == '')
                                            <img style="width: 100%;" src="http://1.bp.blogspot.com/-OlBlCoFO0w8/VVE7CYvL7sI/AAAAAAAALAs/cMUrOZiC8xc/s1600/user.png" class="img-fluid card-img mx-1 mt-3" alt="Funcionário sem foto">
                                        @else
                                            <img style="width: 100%;" src='{{asset("storage/media/funcionarios/{$diretoria->foto}")}}' class="img-fluid card-img mx-1 mt-3" alt="Foto do funcionário">
                                        @endif
                                    </div>
                                    <div class="card-body col-md-8">
                                        <h5 class="card-title">{{$diretoria->nome}}</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Cargo: {{$diretoria->cargo}}</li>
                                            <li class="list-group-item">Formação: {{$diretoria->formacao}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- Fim Diretoria -->  

        <!-- Secretária -->
        <div class="mt-5 mb-3">
            <h4> Secretária </h4>
            <div class="row">
                @foreach($funcionarios as $secretaria)
                    @if($secretaria->cargo == 'Secretário(a)')
                        <div class="col-sm-6 mt-3">
                            <div class="card h-100">
                                <div class="row">
                                    <div class="col-md-4">
                                        @if($secretaria->foto == '')
                                            <img src="http://1.bp.blogspot.com/-OlBlCoFO0w8/VVE7CYvL7sI/AAAAAAAALAs/cMUrOZiC8xc/s1600/user.png" class="img-fluid card-img mx-1 mt-3" alt="...">
                                        @else
                                            <img src='{{asset("storage/media/funcionarios/{$secretaria->foto}")}}' class="img-fluid card-img mx-1 mt-3" alt="...">
                                        @endif
                                    </div>
                                    <div class="card-body col-md-8">
                                        <h5 class="card-title">{{$secretaria->nome}}</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Cargo: {{$secretaria->cargo}}</li>
                                            <li class="list-group-item">Formação: {{$secretaria->formacao}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- Fim Secretária -->

        <!-- Professor -->
        <div class="mt-5 mb-3">
            <h4> Professores </h4>
            <div class="row">
                @foreach($funcionarios as $professor)
                    @if($professor->cargo == 'Professor(a)')
                        <div class="col-sm-6 mt-3">
                            <div class="card h-100">
                                <div class="row">
                                    <div class="col-md-4">
                                        @if($professor->foto == '')
                                            <img src="http://1.bp.blogspot.com/-OlBlCoFO0w8/VVE7CYvL7sI/AAAAAAAALAs/cMUrOZiC8xc/s1600/user.png" class="img-fluid card-img mx-1 mt-3" alt="...">
                                        @else
                                            <img src='{{asset("storage/media/funcionarios/{$professor->foto}")}}' class="img-fluid card-img mx-1 mt-3" alt="...">
                                        @endif
                                    </div>
                                    <div class="card-body col-md-8">
                                        <h5 class="card-title">{{$professor->nome}}</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Cargo: {{$professor->cargo}}</li>
                                            <li class="list-group-item">Formação: {{$professor->formacao}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- Fim Professor -->
    </div>

    
    <!-- fim conteudo -->
@endsection