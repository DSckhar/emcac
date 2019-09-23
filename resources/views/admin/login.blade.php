<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="{{asset('admin/assets/css/styleLogin.css')}}">
        <title>Document</title>
        
    </head>
    <body>

        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                <br/>
                <h4>ENTRE</h4>
                </div>

                <!-- Login Form -->
                <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuário">
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" value="Entrar">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
                </div>

            </div>
        </div>
        <footer>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        </footer>
    </body>
</html>