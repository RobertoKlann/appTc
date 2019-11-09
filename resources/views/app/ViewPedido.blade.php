<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>BobWaiter - Histórico Pedido</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="/css/all.min.css" type="text/css" rel="stylesheet">
        <link href="/css/app.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="fadeInDown listViewApp">
            <div class="ui-corner-all custom-corners">
                <div class="ui-bar ui-bar-a">
                    <h3 style="font-weight: 700;" id="tituloPedido"></h3>
                </div>
                <div class="ui-body ui-body-a">
                    <div class="row">
                        <div class="col-md-4" style="display: flex;">
                            <a style="color: #000" href="#">
                                <img id="imagemEstabelecimento" src="" class="imgCenter" style="height: 100px;">
                                <h4 id="nomeEstabelecimento"></h4>
                                <p id="localEstabelecimento"></p>
                                <p id="horarioEstabelecimento"></p>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="ui-corner-all custom-corners">
                        <div class="ui-bar ui-bar-a">
                            <h3 style="font-weight: 700;">Detalhes do Pedido</h3>
                        </div>
                        <div class="ui-body ui-body-a">
                        <?php foreach($pedidos as $pedido): ?>
                            <p style="color: #000; font-weight: 500;">{{$pedido->prddescricao}} - Qtde: {{$pedido->itpquantidade}} - Vlr. Unit: {{$pedido->prdpreco}}</p>
                            <input type="hidden" id="nomerazao" value="<?= $pedido->estnomerazao ?>">
                            <input type="hidden" id="horario" value="<?= $pedido->esthorario ?>">
                            <input type="hidden" id="pedidoCodigo" value="<?= $pedido->pedcodigo ?>">
                            <input type="hidden" id="local" value="<?= $pedido->estendereco ?>">
                            <input type="hidden" id="imagem" value="<?= strtolower($pedido->estnomerazao) ?>">
                        <?php endforeach ?>
                        <p style="color: red; font-weight: 700;" id="valorTotalPedido"></p>
                        </div>
                    </div>
                </div>
            </div>
            @component('app.componentes.nav')
            @endcomponent
        </div>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="https://kit.fontawesome.com/67c671c2e1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="/js/axios.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/produto.js"></script>
    </body>
</html>