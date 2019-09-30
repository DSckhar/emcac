@extends('site.site') 
@section('site')

<div class="container mt-3 mb-3">
    <h1>Publicações</h1>

    <div class="row">
        <div class="col-4">

            <div id="livro" class="list-group">
                <a class="list-group-item list-group-item-action" href="#">Filtro 1</a>
                <a class="list-group-item list-group-item-action" href="#">Filtro 2</a>
                <a class="list-group-item list-group-item-action" href="#">Filtro 3</a>
                <a class="list-group-item list-group-item-action" href="#">Filtro 4</a>
                <a class="list-group-item list-group-item-action" href="#">Filtro 5</a>
                <a class="list-group-item list-group-item-action" href="#">Filtro 6</a>
            </div>
        </div>
        <div class="col-8" id="caixaLivro" style="position: relative; height: 500px; overflow: auto">

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="card" style="width: 65rem;">
                        <div class="card-body">
                            <h1 class="card-title">Publicação 1</h1>
                            <figure id="figura">
                                <img src="https://pt.seaicons.com/wp-content/uploads/2015/06/news-icon1.png" alt="">
                            </figure>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint iusto laborum dolorem enim cumque minus, alias exercitationem repudiandae
                                repellat nulla sequi quam ducimus maxime saepe eaque consequatur illum voluptas officia.
                                <button type="button" class="btn btn-light">Mais...</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card" style="width: 65rem; margin-top: 2%;">
                        <div class="card-body">
                            <h1 class="card-title">Publicação 2</h1>
                            <figure id="figura">
                                <img src="https://pt.seaicons.com/wp-content/uploads/2015/06/news-icon1.png" alt="">
                            </figure>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint iusto laborum dolorem enim cumque minus, alias exercitationem repudiandae
                                    repellat nulla sequi quam ducimus maxime saepe eaque consequatur illum voluptas officia.
                                    <button type="button" class="btn btn-light">Mais...</button>
                            </p>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="card" style="width: 65rem; margin-top: 2%;">
                        <div class="card-body">
                            <h1 class="card-title">Publicação 3</h1>
                            <figure id="figura">
                                <img src="https://pt.seaicons.com/wp-content/uploads/2015/06/news-icon1.png" alt="">
                            </figure>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint iusto laborum dolorem enim cumque minus, alias exercitationem repudiandae
                                    repellat nulla sequi quam ducimus maxime saepe eaque consequatur illum voluptas officia.
                                    <button type="button" class="btn btn-light">Mais...</button>
                            </p>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>


@endsection