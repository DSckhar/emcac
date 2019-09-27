@extends('site.site') 
@section('site')

<link rel="stylesheet" href="{{asset('site/css/publicacao.css')}}">

<main class="container-fluid" id="cont">
    <div class="row">
        <div class="sidebar text-center" >
            <img src="" class="img-circle">
            <h3>User Name</h3>
            Publicação 1<br/>
            Publicação 2<br/>
            Publicação 3<br/>
            Publicação 4<br/>
            Publicação 5<br/>
            Publicação 6<br/>
            Publicação 7<br/>
            Publicação 8<br/>
            Publicação 9<br/>
            Publicação 10<br/>
            Publicação 11<br/>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col">
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
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 65rem;">
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
                </div> 
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 65rem;">
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
</main>

@endsection