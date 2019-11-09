<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>BobWaiter - Cardápio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="/css/all.min.css" type="text/css" rel="stylesheet">
        <link href="/css/app.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="fadeInDown listViewApp">      
            @component('app.componentes.header')
            @endcomponent
            <ul data-role="listview" data-inset="true" style="margin-top: 40px; margin-left: -1px; margin-right: -1px;">
                <?php foreach($categorias as $categoria): ?>
                <li><a href="{{ url('app/estabelecimento/produtos/categoria/'.$categoria->ctgcodigo) }}">
                    <img src="/img/{{strtolower($categoria->ctgdescricao)}}.jpg" class="imgCenter">
                    <h2><?= $categoria->ctgdescricao ?></h2>
                    <p></p><p></p><p></p><p></p></a>
                </li>
                <?php endforeach ?>
            </ul>
            @component('app.componentes.nav')
            @endcomponent
        </div>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="https://kit.fontawesome.com/67c671c2e1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
        <script src="/js/produto.js"></script>
    </body>
</html>