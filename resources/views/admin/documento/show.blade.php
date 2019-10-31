@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Documento - {{$documento->titulo}}</h1>
        <div>
            <button title="Editar documento" class="btn btn-outline-dark" onclick="window.location.href='{{route('documento.edit', $documento->id)}}'" >
                <span data-feather="edit"></span>
            </button>
            <button title="Apagar documento" class="btn btn-outline-danger" onclick="window.location.href='{{route('documento.delete', $documento->id)}}'" >
                <span data-feather="trash-2"></span>
            </button>
        </div>
    </div>
    <div class="contanier-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Ano</th>
                            <th>Inserção no Sistema</th>
                            <th>Última Atualização</th>
                            <th>Arquivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$documento->ano}}</td>
                            <td>{{date('d/m/Y', strtotime($documento->created_at))}}</td>
                            <td>{{date('d/m/Y', strtotime($documento->updated_at))}}</td>
                            <td>
                                <a class="text-dark" href='{{asset("storage/media/arquivo/{$documento->arquivo}")}}' target="_blank">Clique para abrir</a>
                            </td>
                        </tr>
                    </tbody>
                </table>                                
                <br/>
            </div>
        </div>
    </div> <br/>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-top border-bottom">
        <h1 class="h2">Capítulos do Documento</h1>
        <div>
            <button title="Adicionar capítulo" class="btn btn-outline-dark" onclick="window.location.href='{{route('capitulo.cadastrar', $documento->id)}}'" >
                <span data-feather="plus"></span>
            </button>
        </div>
    </div>
    <div class="contanier-fluid">
        <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Título</th>
                    <th class="no-sort"></th>
                    <th class="no-sort"></th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tbody>
                <?php $cont = 1;?>
                @foreach($capitulos as $capitulo)
                    <tr>
                        <td>{{$cont}}</td>
                        <td>{{$capitulo->titulo}}</td>
                        <td>
                            <button title="Vizualizar capítulo" class="btn btn-outline-dark" onclick="window.location.href='{{route('capitulo.show', $capitulo->id)}}'" >
                                <span data-feather="eye"></span>
                            </button>
                        </td>
                        <td>
                            <button title="Editar capítulo" class="btn btn-outline-dark" onclick="window.location.href='{{route('capitulo.edit', $capitulo->id)}}'" >
                                <span data-feather="edit"></span>
                            </button>
                        </td>
                        <td>
                            <button title="Apagar capítulo" class="btn btn-outline-danger" onclick="window.location.href='{{route('capitulo.delete', $capitulo->id)}}'" >
                                <span data-feather="trash-2"></span>
                            </button>
                        </td>
                    </tr>
                    <?php $cont ++; ?>
                @endforeach
            <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Título</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div> 
@endsection 