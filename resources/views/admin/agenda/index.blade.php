@extends('admin.admin') 
@section('adm')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Agenda</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-outline-dark" onclick="window.location.href='{{route('agenda.create')}}'" ><span data-feather="plus"></span></button>
        </div>
    </div>
    
    <div class="contanier-fluid">
        <table id="tabela" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Data de início</th>
                    <th>Data de término</th>
                    <th class="no-sort">Cor</th>
                    <th class="no-sort"></th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tbody>
                <?php $cont = 1;?>
                @foreach($agendas as $agenda)
                <tr>
                    <td class="align-middle">{{$cont}}</td>
                    <td class="align-middle">{{$agenda->titulo}}</td>
                    <td class="align-middle">{{$agenda->descricao}}</td>
                    <td class="align-middle">{{date('d/m/Y', strtotime($agenda->dInicio))}}</td>
                    <td class="align-middle">{{date('d/m/Y', strtotime($agenda->dTermino))}}</td>
                    <td style="background-color: {{$agenda->cor}};"></td>
                    <td>
                        <button class="btn btn-outline-dark" onclick="window.location.href='{{route('agenda.edit', $agenda->id)}}'" >
                            <span data-feather="edit"></span>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger" onclick="window.location.href='{{route('agenda.delete', $agenda->id)}}'" >
                            <span data-feather="trash-2"></span>
                        </button>
                    </td>
                </tr>
                <?php $cont ++; ?>
                @endforeach
            <tfoot>
                <tr>
                    <th></th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Data de início</th>
                    <th>Data de término</th>
                    <th>Cor</th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>

    
@endsection 