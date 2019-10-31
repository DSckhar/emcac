@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$documento->titulo}}</h1>
        <h2 class="h2">Capítulo - {{$capitulo->titulo}}</h2>
        <div>
            <button title="Retonar ao documento" class="btn btn-outline-dark" onclick="window.location.href='{{route('documento.show', $documento->id)}}'" >
                <span data-feather="arrow-left"></span>
            </button>
            <button title="Editar capítulo" class="btn btn-outline-dark" onclick="window.location.href='{{route('capitulo.edit', $capitulo->id)}}'" >
                <span data-feather="edit"></span>
            </button>
            <button title="Apagar capítulo" class="btn btn-outline-danger" onclick="window.location.href='{{route('capitulo.delete', $capitulo->id)}}'" >
                <span data-feather="trash-2"></span>
            </button>
        </div>
    </div>
    <div class="contanier-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <?php echo nl2br($capitulo->descricao); ?>
            </div>
        </div>
    </div> <br/>
@endsection 