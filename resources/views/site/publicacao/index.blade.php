@extends('site.site') 
@section('site')

<script>
    // var idTipoPublic= {{$idTipoPublicacao}};
    
    // $('#'+idTipoPublic).classList.add("active");
</script>

<div class="container mt-3 mb-3">
    <h1>Publicações</h1>

    <div class="row">
        <div class="col-3">

            <div id="livro" class="list-group">
                @foreach($tipos as $tipo)
                    <a id="{{$tipo->id}}" class="list-group-item list-group-item-action" href="/publicacoes/{{$tipo->id}}">{{$tipo->nome}}</a>
                @endforeach

                <a class="list-group-item list-group-item-action" href="/publicacoes">Limpar filtro</a>
            </div>
        </div>
        <div class="col-8">

            <div class="content">
                <div class="container">
                    @foreach($publicacoes as $publicacao)
                        <div class="card mb-3" style="background-color: #56555B">
                            <div id="espaco" class="row">
                                    @if($publicacao->foto != '')
                                        <!-- <img class="card-img-top" src='{{asset("storage/media/fotos/{$publicacao->foto}")}}' style="width: 100%;" alt=""> -->
                                        <div class="col-6" id="img" style="background-image: url('{{asset("storage/media/fotos/{$publicacao->foto}")}}');">
                                            
                                        </div>
                                    @elseif($publicacao->foto == '')
                                    <div class="col-6" id="img" style="background-image: url('{{asset("site/images/semFoto.png")}}');">
                                            
                                        </div>
                                    @endif
                                <div class="card-body col-6 text-white">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="card-title" style="text-transform: uppercase">{{$publicacao->titulo}}</h4>
                                            <span class="badge badge-pill badge-info">{{$publicacao->nome}}</span>
                                            <p class="card-text">Data de Início: <br/>{{$publicacao->dInicio}}</p>
                                            <p class="card-text">Data de Término: <br/>{{$publicacao->dTermino}}</p>
                                        </div>
                                    </div>
                                    <div id="more" class="row justify-content-end">
                                        <div class="col-4">
                                            <button class="btn btn-info" onclick="window.location.href='/publicacao/{{$publicacao->id}}'" >Mais...</button>                          
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