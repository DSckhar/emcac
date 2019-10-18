@extends('admin.admin') 
@section('adm')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selecione uma Turma</h1>
</div>

<div class="contanier-fluid">
    <table id="tabela" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th>Status</th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
            </tr>
        </thead>
        <tbody>
            <?php $cont = 1;?>
            <!-- foreach($turmas as $turma) -->
            <tr>
                <td>{{$cont}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-outline-dark" onclick="window.location.href='/admr/turmaaluno/{{$turmaAluno->id}}'" >
                        <span data-feather="plus"></span>
                    </button>
                </td>
            </tr>
            <?php $cont ++; ?>
            <!-- endforeach -->
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th>Status</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div> 
@endsection