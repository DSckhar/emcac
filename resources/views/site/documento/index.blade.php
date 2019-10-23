@extends('site.site') 
@section('site')
    <!-- conteudo -->
    <div class="container mt-3 mb-5">
        <h1>Documento - {{$documento->titulo}}</h1>

        <div class="row mt-3">
            <div class="col-4">

                <div id="livro" class="list-group">
                    @foreach($capitulos as $capitulo)
                        <a class="list-group-item list-group-item-action" style="text-transform: uppercase" href="#{{$capitulo->id}}">{{$capitulo->titulo}}</a>
                    @endforeach
                    <a class="list-group-item list-group-item-action" target="blank" href='{{asset("storage/media/arquivo/{$documento->arquivo}")}}'>DOCUMENTO COMPLETO</a>
                </div>

                <div class="list-group mt-5">
                    <h4>Versões anteriores</h4>
                    @foreach($documentos as $documentoAt)
                        <a class="list-group-item list-group-item-action" target="blank" href='{{asset("storage/media/arquivo/{$documentoAt->arquivo}")}}'>{{$documentoAt->titulo}} - {{$documentoAt->ano}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-8" id="caixaLivro" style="position: relative; overflow: auto">

                <div id="texto" style="text-indent: 2.5em; text-align: justify;" data-spy="scroll" data-target="#livro" data-offset="0">
                    @foreach($capitulos as $capitulo)
                    
                        <h3 id="{{$capitulo->id}}">{{$capitulo->titulo}}</h3>
                        <?php echo nl2br($capitulo->descricao); ?>

                    @endforeach
                </div>
            </div>
        </div>

        <a id="subirTopo">
            <img src="{{asset('site/images/topo.png')}}" alt="">
        </a>
    </div>
    <!-- fim conteudo -->

@endsection