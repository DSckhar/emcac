@extends('site.site') 
@section('site')
<div class="container mt-3 mb-3">
    <h1>Publicações</h1>

    <div class="row">
        <div class="col-3">

            <div id="livro" class="list-group">
                @foreach($tipos as $tipo)
                    @if($idTipoPublicacao == $tipo->id)
                        <a id="{{$tipo->id}}" class="list-group-item list-group-item-action active" style="background-color: #19c880; border-color: #19c880;" href="/publicacoes/{{$tipo->id}}">{{$tipo->nome}}</a>
                    @else
                        <a id="{{$tipo->id}}" class="list-group-item list-group-item-action" href="/publicacoes/{{$tipo->id}}">{{$tipo->nome}}</a>
                    @endif
                @endforeach

                <a class="list-group-item list-group-item-action" href="/publicacoes">Limpar filtro</a>
            </div>
        </div>
        <div class="col-8">

            <div class="content">
                <div class="container">
                    @foreach($publicacoes as $publicacao)
                        <div id="espaco" class="card mb-3" style="background-color: #56555B">
                            <div  class="row">
                                <div class="col-12 col-md-6">
                                    @if($publicacao->foto != '')
                                        <img class="card-img-top" height="100%" src='{{asset("storage/media/fotos/{$publicacao->foto}")}}' style="width: 100%;" alt="">
                                    
                                    @elseif($publicacao->foto == '')
                                    <img class="card-img-top"  height="100%" src='{{asset("site/images/semFoto.png")}}' style="width: 100%;" alt="">
                                    @endif                                
                                </div>
                                <div class="card-body col-12 col-md-6 text-white">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="card-title" style="text-transform: uppercase">{{$publicacao->titulo}}</h4>
                                            <span class="badge badge-pill" style="background-color: #19c880; border-color: #19c880;">{{$publicacao->nome}}</span>
                                            <p class="card-text">Data de Início: <br/>{{date('d/m/Y', strtotime($publicacao->dInicio))}}</p>
                                            <p class="card-text">Data de Término: <br/>{{date('d/m/Y', strtotime($publicacao->dTermino))}}</p>
                                        </div>
                                    </div>
                                    <div id="more" class="row justify-content-end">
                                        <div class="col-4 col-md-6 col-lg-4">
                                            <button class="btn btn-success" style="background-color: #19c880; border-color: #19c880;" onclick="window.location.href='/publicacao/{{$publicacao->id}}'" >Mais...</button>                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection