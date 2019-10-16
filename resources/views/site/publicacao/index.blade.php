@extends('site.site') 
@section('site')
<div class="container mt-3 mb-3">
    <h1>Publicações</h1>

    <div class="row">
        <div class="col-3">

            <div id="livro" class="list-group">
                @foreach($tipos as $tipo)
                    <a class="list-group-item list-group-item-action" href="#">{{$tipo->nome}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-8">

            <div class="content">
                <div class="container">
                    @foreach($publicacoes as $publicacao)
                        <div class="card mb-3 bg-secondary">
                            <div id="espaco" class="row">
                                <div class="col-6">
                                    @if($publicacao->foto != '')
                                        <img class="card-img-top" src='{{asset("storage/media/fotos/{$publicacao->foto}")}}' style="width: 100%;" alt="">
                                    @elseif($publicacao->foto == '')
                                        <img class="card-img-top" src='{{asset("site/images/semFoto.png")}}' style="width: 100%;" alt="">
                                    @endif
                                </div>
                                <div class="card-body col-6 text-white">
                                    <h5 class="card-title">{{$publicacao->titulo}}</h5>
                                    <p class="card-text">{{$publicacao->descricao}}</p>
                                    <a href="/publicacao/{{$publicacao->id}}" class="card-link">Mais...</a>
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