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
    @if($user->nivel == 0)
        <div class="contanier-fluid">
            <div class="row justify-content-center" style="width: 100%; margin-top: 15%; text-align: center;">
                <div class="col-5">
                    <h3 >
                        No momento você ainda não está habilitado a utilizar este sistema 
                        <br/>Solicite permissão a um adiministrador
                    </h3>
                    <a class="btn btn-outline-dark" href="{{route('logout')}}">Sair</a>
                </div>
            </div>
        </div>   
    @else
        <div class="container-fluid" >
            <div id="navbar" class="row">
                <div class="col-6 col-md-4 justify-content-center offset-md-1">
                    <h3>EMCAC</h3>
                </div>
                <div class="col-6 col-md-3 justify-content-end offset-md-4">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="btn btn-outline-dark" href="{{route('usuario.perfil')}}">{{$user->name}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" style=" min-height:100%;">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column"> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('aluno.index')}}"><span data-feather="users"></span> Alunos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('funcionario.index')}}"><span data-feather="briefcase"></span> Funcionários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('turma.index')}}"><span data-feather="smile"></span> Turmas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('documento.index')}}"><span data-feather="file-text"></span> Documentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('publicacao.index')}}"><span data-feather="book-open"></span> Publicações</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('agenda.index')}}"><span data-feather="calendar"></span> Agenda</a>
                            </li>
                            @if($user->nivel == 2)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('usuario.index')}}"><span data-feather="user"></span> Usuários</a>
                            </li>
                            @endif
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
    @endif
    </body>

</html>