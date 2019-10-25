<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/all.min.css" type="text/css" rel="stylesheet">
        <link href="/css/login.css" type="text/css" rel="stylesheet">
        <link href="/css/app.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

        <title>Conecte-se</title>
    </head>
    <body style="background-color: #ff0000f5;">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="fadeIn first">
                    <img src="/img/ninja.jfif" id="icon" alt="User Icon" />
                </div>

                <form>
                    <input type="text" id="email" class="fadeIn second teste" name="email" placeholder="Informe seu email">
                    <input type="text" id="password" class="fadeIn third teste" name="password" placeholder="Informe sua senha">
                    <input type="submit" class="fadeIn fourth" value="Acessar" style="background-color: #ff0000f5;">

                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>

                <div id="formFooter">
                    <a class="underlineHover" href="{{ url('app/cadastroUsuario') }}" id="anchorLogin" style="color: #0d0d0d;">Criar uma conta</a>
                </div>
            </div>
            <br>
            @if(Session::has('loginFails'))
                <p class="alert {{ Session::get('alertClass', 'alert-info') }}">{{ Session::get('loginFails') }}</p>
            @endif
        </div>

        <script type="text/javascript" src="/js/jquery.js"></script>
        <script src="https://kit.fontawesome.com/67c671c2e1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </body>
</html>