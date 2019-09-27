@extends('site.site') 
@section('site')
    <!-- conteudo -->
    <div class="container mt-3 mb-5">
        <h1 class="text-center">Boletins</h1>

        <div class="jumbotron">
            <p>
                Nesta sessão você pode visualizar seus boletins, ou do aluno a qual você é responsavel.
                <br/>
                Pesquise pelo nome do aluno.
            <p>
        </div>
        <div>
            <form method="post" action="" >
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pesquisar boletins">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-outline-success" value="Pesquisar">
                    </div>
                </div>
            </form> 
        </div>
    </div>
    <!-- fim conteudo -->
@endsection