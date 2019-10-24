
function validarData(){

    var dInicio = validar.dInicio.value;
    var dTermino = validar.dTermino.value;

    if (dInicio <= dTermino){
        return true;
    }else{
        mensagemData();
        return false;
    }

    function mensagemData(){
        var erro = "Digite uma data de término valida"
        var span = document.getElementById("dataTermino");

        span.innerText = erro;

        //alert("Data de término maior que a de início!");
        $("#dTermino").focus().css("borderColor", "red").css("color", "red");

    }
}

function validarDataeHora(){

    var dInicio = validar.dInicio.value;
    var dTermino = validar.dTermino.value;

    var hInicio = validar.hInicio.value;
    var hTermino = validar.hTermino.value;

    if((dInicio != "")||(dTermino != "")||(hInicio != "")||(hTermino != "")){
        if (dInicio <= dTermino){
            
            if(dInicio == dTermino){

                if(hInicio < hTermino){
                    return true;
                }else{
                    mensagemHora();
                    return false;
                }
            }else{
                return true;
            }

        }else{
            mensagemData();
            return false;
        }
    }else{
        alert("Você deixou alguns campos sem preencher");
        return false;
    }

    function mensagemData(){
        var erro = "Digite uma data de término valida"
        var span = document.getElementById("dataTermino");

        span.innerText = erro;

        //alert("Data de término maior que a de início!");
        $("#dTermino").focus().css("borderColor", "red").css("color", "red");

    }

    function mensagemHora(){
        var erro = "Digite uma hora de término valida"
        var span = document.getElementById("horaTermino");

        span.innerText = erro;

        //alert("Data de término maior que a de início!");
        $("#hTermino").focus().css("borderColor", "red").css("color", "red");

    }
}

//validar arquivos true <= 20mb
validar.arquivo.onchange = function() {
    if(this.files[0].size > 20000000){
        var erro = "Arquivo ultrapassando o tamanho 20MB"
        var span = document.getElementById("tamanhoArquivo");

        span.innerText = erro;

        $("#arquivo").focus().css("borderColor", "red").css("color", "red");
        this.value = "";
    };
};

function validarSenha(){

    var passwordNova = alterarSenha.passwordNova.value;
    var passwordConfirme = alterarSenha.passwordConfirme.value;

    if(passwordNova == passwordConfirme){
        return true
    }else{
        alert("A nova senha e a confirmação não coincidem");
        return false;
    }

}

