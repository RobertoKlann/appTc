<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>BobWaiter - Pedidos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="/css/all.min.css" type="text/css" rel="stylesheet">
        <link href="/css/app.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="fadeInDown listViewApp">      
            <ul data-role="listview" data-inset="true">
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/blackburguer.png" class="imgCenter">
                    <h2>BlackBeard Burguer</h2>
                    <p>Pedido 01</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/china.png" class="imgCenter">
                    <h2>China</h2>
                    <p>Pedido 02</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/blackburguer.png" class="imgCenter">
                    <h2>BlackBeard Burguer</h2>
                    <p>Pedido 03</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/blackburguer.png" class="imgCenter">
                    <h2>BlackBeard Burguer</h2>
                    <p>Pedido 04</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/opa.png" class="imgCenter">
                    <h2>OPA</h2>
                    <p>Pedido 05</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/opa.png" class="imgCenter">
                    <h2>OPA</h2>
                    <p>Pedido 06</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/opa.png" class="imgCenter">
                    <h2>OPA</h2>
                    <p>Pedido 07</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/senhorhamburguer.jfif" class="imgCenter">
                    <h2>Senhor Hamburguer</h2>
                    <p>Pedido 08</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/senhorhamburguer.jfif" class="imgCenter">
                    <h2>Senhor Hamburguer</h2>
                    <p>Pedido 09</p></a>
                </li>
                <li><a href="{{ url('app/estaberlecimento/cardapio') }}">
                    <img src="/img/senhorhamburguer.jfif" class="imgCenter">
                    <h2>Senhor Hamburguer</h2>
                    <p>Pedido 10</p></a>
                </li>
            </ul>
            @component('app.componentes.nav')
            @endcomponent
        </div>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="https://kit.fontawesome.com/67c671c2e1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>