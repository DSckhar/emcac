<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>EMCAC - ADM</title>

        <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/DataTables/datatables.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

    </head>

    <body>
        <div class="container-fluid" >
            <div id="navbar" class="row">
                <div class="col-6 col-md-4 justify-content-center offset-md-1">
                    <h3>EMCAC</h3>
                </div>
                <div class="col-6 col-md-3 justify-content-end offset-md-4">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="btn btn-outline-dark" href="#">Nome do Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" style=" min-height:100%;">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column"> 
                            <li class="nav-item">
                                <a class="nav-link" href="/admr/aluno"><span data-feather="users"></span> Alunos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admr/funcionario"><span data-feather="briefcase"></span> Funcionários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admr/turma"><span data-feather="smile"></span> Turmas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admr/documento"><span data-feather="file-text"></span> Documentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admr/publicacao"><span data-feather="book-open"></span> Publicações</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admr/agenda"><span data-feather="calendar"></span> Agenda</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @yield('adm')
                </main>
            </div>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <footer>
        <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/js/jquery.js')}}"></script>
        <script src="{{asset('admin/DataTables/datatables.min.js')}}"></script>
        <script src="{{asset('admin/DataTables/br.js')}}"></script>
        <script src="{{asset('admin/js/validacao.js')}}"></script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#tabela').DataTable();
            } );
        </script>

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
        feather.replace()

        
        </script>
        
       </footer>
    </body>

</html>