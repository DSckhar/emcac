@extends('admin.admin') 
@section('adm')
    <script>
        function validarCPF(){
            var cpf = validar.cpf.value;

            function mensagemCPF(){
                var erro = "Digite um CPF valido"
                var span = document.getElementById("CpfInvalido");

                span.innerText = erro;

                alert("CPF invalido!");
                $("#cpf").focus().css("borderColor", "red").css("color", "red");
                
            }

            var numeros, digitos, soma, i, resultado, digitos_iguais;
            digitos_iguais = 1;
            if (cpf.length < 11){
                mensagemCPF();
                return false;
                
            }
            for (i = 0; i < cpf.length - 1; i++){
                if (cpf.charAt(i) != cpf.charAt(i + 1)){
                    digitos_iguais = 0;
                    break;
                }
            }
            if (!digitos_iguais){
                numeros = cpf.substring(0,9);
                digitos = cpf.substring(9);
                soma = 0;
                for (i = 10; i > 1; i--)
                    soma += numeros.charAt(10 - i) * i;
                    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                    if (resultado != digitos.charAt(0)){
                        mensagemCPF();
                        return false;
                    }
                    numeros = cpf.substring(0,10);
                    soma = 0;
                    for (i = 11; i > 1; i--)
                        soma += numeros.charAt(11 - i) * i;
                        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                    if (resultado != digitos.charAt(1)){
                        mensagemCPF();
                        return false;
                    }
                    return true;
            }else{
                mensagemCPF();
                return false;
            }
        }
    </script>
    
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">CADASTRAR RESPONSAVEL</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    
                </div>
            </div>
            <div class="block-content">
                <div class="contanier-fluid">
                    <form name="validar" method='post' action="/aluno/cadastrado">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                {!! csrf_field() !!}
                                <label for="nome">Nome</label>
                                <div class="form-group">
                                    <input id="nome" class="form-control" type="text" name="nome" maxlength="60" required/>
                                </div>

                                <label for="cpf">CPF</label>
                                <div class="form-group">
                                    <input id="cpf" class="form-control" type="text" name="cpf" maxlength="14" placeholder="Digita o CPF sem pontuação"  required/>
                                    <span id="CpfInvalido"></span>
                                </div>

                                <label for="telefone">Telefone</label>
                                <div class="form-group">
                                    <input id="telefone" class="form-control" type="tel" name="telefone" maxlength="20" required/>
                                </div>

                                <label for="email">Email</label>
                                <div class="form-group">
                                    <input id="email" class="form-control" type="email" name="email" maxlength="40" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <button type="submit" onclick="return validarCPF();" class="btn btn-primary">Enviar</button>
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