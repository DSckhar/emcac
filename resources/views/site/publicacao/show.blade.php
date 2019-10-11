@extends('site.site')
@section('site')

    <div class="container mt-3">
        <h1>Publicação - {{$publicacao->titulo}}</h1>
    </div>

    <div class="container">
        <div class="mb-3 text-justific">
            <b>Descrição</b><br>
            <p class="text-justify">{{$publicacao->descricao}}</p>
        </div>
        <table class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Data início</th>
                    <th>Data Término</th>
                    <th>Hora início</th>
                    <th>Hora Término</th>
                    <th>Hora Término</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$tipo->nome}}</td>
                    <td>{{date('d/m/Y', strtotime($publicacao->dInicio))}}</td>
                    <td>{{date('d/m/Y', strtotime($publicacao->dTermino))}}</td>
                    <td>{{$publicacao->hInicio}}</td>
                    <td>{{$publicacao->hTermino}}</td>
                    <td>
                        @if($publicacao->arquivo != null)
                            <a class="text-dark" href='{{asset("storage/media/arquivo/{$publicacao->arquivo}")}}' target="_blank">Clique para abrir</a>
                        @else
                            Publicação sem arquivo
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>                                
        <br/>
    </div> <br/>

    <!-- fotos -->
    <div class="container mb-3">
        <section class="home-gallery">
            <div class="gallery-wrap flex flex-wrap">
                @foreach($fotos as $foto)
                    <div class="gallery-grid gallery-grid2x2">
                        <a href="#">
                            <img onclick="clique(this)" class="img-thumbnail" src='{{asset("storage/media/fotos/{$foto->arquivo}")}}' alt="{{ $foto->descricao }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    
    <!-- modal para abrir imagem -->
    <div id="janelaModal" class="modalVisual">
        <div>
            <span class="fechar">x</span>
            <img class="modalConteudo" id="imgModal">
        <div>
        <div id="txtImg"></div>
    </div>
@endsection