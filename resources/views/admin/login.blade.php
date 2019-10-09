<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="{{asset('admin/css/styleLogin.css')}}">
        <title>EMCAC</title>
        
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
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" value="Entrar">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
                </div>

            </div>
        </div>
        <footer>
            <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('admin/js/jquery.js')}}"></script>
        </footer>
    </body>
</html>