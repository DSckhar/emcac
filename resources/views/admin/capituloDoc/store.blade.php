@extends('admin.admin') 
@section('adm')
    <script src="{{asset('admin/assets/js/tinymce.min.js')}}"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR CAPÍTULO</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    
                </div>
            </div>
            <div class="block-content">
                <div class="contanier-fluid">
                    <form method='post' action="/aluno/cadastrado">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                {!! csrf_field() !!}

                                <label for="capitulo1">Digite o texto do capítulo</label>
                                <div class="form-group">
                                    <textarea id="capitulo1" type="text" rows="25" class="form-control" name="capitulo1" required></textarea>
                                </div>
                    
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                        <br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection