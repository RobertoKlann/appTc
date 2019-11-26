<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>BobWaiter - Produto</title>
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
                    <h3 style="font-weight: 700;">Carrinho...</h3>
                </div>
                <div class="ui-body ui-body-a">
                    <?php foreach($produtos as $produto): ?>
                    <div class="row">
                        <div class="col-md-4" style="display: flex;">
                            <i id="minus" class="fa fa-minus-circle menos" aria-hidden="true" style="margin-top: 20px;"></i> &nbsp; <input style="width: 40px;" type="number" name="numero" id="num" value="1"> &nbsp;<i class="fa fa-plus-circle mais" id="more" aria-hidden="true" style="margin-top: 20px;"></i>
                            <p style="margin-top: 20px; margin-left: 10px;">{{$produto->prddescricao}}</p>
                            <p style="margin-top: 20px; margin-left: 30%; color: red;">{{number_format ($produto->prdpreco, 2, ',', '.')}}</p>
                            <input type="hidden" name="codigoProduto" value="{{$produto->prdcodigo}}">
                        </div>
                    </div>
                    <input id="codigoEstabelecimento" type="hidden" value="{{$produto->estcodigo}}">
                    <input id="codigoPedido" type="hidden">                    
                    <?php endforeach ?>
                    <hr>
                    <div class="ui-corner-all custom-corners">
                        <div class="ui-bar ui-bar-a">
                            <h3 style="font-weight: 700;">Pagamento</h3>
                        </div>
                        <div class="ui-body ui-body-a">
                            <p style="color: red; font-weight: 500;">Total do pedido: {{number_format ($produto->prdpreco, 2, ',', '.')}}</p>
                        </div>
                    </div>
                    <br>

                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="TituloModalCentralizado">Escolha uma mesa.</h5>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="ui-field-contain">
                                    <select name="msacodigo" id="msacodigo">
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="confirmar" class="btn btn-primary">Confirmar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <a class="underlineHover" href="#" id="anchorAddItem" style="color: #d41515; margin-left: 20%;">ADICIONAR MAIS ITENS</a>
                    <input type="button" class="btn btn-red-app mb-0" value="REALIZAR PEDIDO" data-toggle="modal" data-target="#ExemploModalCentralizado">
                    <input type="button" id="cancelarPedido" class="btn btn-red-app mb-0" value="CANCELAR PEDIDO">
                </div>                
                
            </div>
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