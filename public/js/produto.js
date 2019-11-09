
$(document).ready(function() {
    if($('#codigoEstabelecimento').val()) {
        $.get('/app/getAllMesaEstabelecimento/' + $('#codigoEstabelecimento').val(), function(dados) {
            $('#codigoPedido').val(dados.maxPed[0].max + 1);
            for(i = 0; i < dados.mesas.length; i++) {            
                $('select[name=msacodigo]').append($('<option>', {
                    value: dados.mesas[i].msacodigo,
                    text: 'Mesa: ' + dados.mesas[i].msacodigo
                }));
            }        
        });
    }

    $("#cancelarPedido").on("click", function () {
        localStorage.clear();
        window.location.href = 'http://127.0.0.1:8000/app/estabelecimentos';
    });

    $("#anchorAddItem").on("click", function () {
        let codigo = $('#codigoEstabelecimento').val();
        window.location.href = 'http://127.0.0.1:8000/app/estabelecimento/cardapio/' + codigo;
    });

    $(".mais").on("click", function () {
        let qtdeAtual = this.parentElement.getElementsByTagName('input').num.value;
        this.parentElement.getElementsByTagName('input').num.value = (parseInt(qtdeAtual) + 1);
    });

    $(".menos").on("click", function () {
        let qtdeAtual = this.parentElement.getElementsByTagName('input').num.value;
        if(qtdeAtual == "1") {
            return;
        }
        this.parentElement.getElementsByTagName('input').num.value = (parseInt(qtdeAtual) - 1);
    });

    if($('#nomerazao').val() && $('#horario').val() && $('#local').val()) {
        $('#tituloPedido')[0].innerHTML           = 'Detalhes do Pedido 0' + $('#pedidoCodigo').val();
        $('#nomeEstabelecimento')[0].innerHTML    = 'Estabelecimento: ' + $('#nomerazao').val();
        $('#horarioEstabelecimento')[0].innerHTML = 'Horário de atendimento: ' +  $('#horario').val();
        $('#localEstabelecimento')[0].innerHTML   = 'Endereço: ' +  $('#local').val();
        $('#imagemEstabelecimento')[0].src        = "/img/" + $('#imagem').val() + ".jfif";
    }

    if($('#valorTotalPedido')[0]) {
        $.get('/app/getValorTotalPedido/' + getCodigoPedido(), function(dados) {
            $('#valorTotalPedido')[0].innerHTML ='Valor Total do pedido: ' +  dados[0].valortotal;
        });
    }

    $("#confirmar").on("click", function () {
        var codigoUsuario = 2,
            codigoPedido  = $('#codigoPedido').val();
            codigoEst     = $('#codigoEstabelecimento').val(),
            codigoMesa    = $('#msacodigo').val(),
            produtos      = $('input[name=codigoProduto]'),
            quantidades   = $('input[name=numero]'),
            codigoProduto = [];

        for(var i = 0; i < produtos.length; i++) {            
            codigoProduto.push({
                "codigoProduto": $('input[name=codigoProduto]')[i].value,
                "quantidade"   : $('input[name=numero]')[i].value
            });
        }

        let dados = {
            "codigoPedido"  : codigoPedido,
            "codigoEst"     : codigoEst,
            "codigoUsuario" : codigoUsuario,
            "codigoMesa"    : codigoMesa,
            "produtos"      : codigoProduto
        };

        axios({
            method : 'post',
            url    : 'http://127.0.0.1:8000/app/pedido',
            data   : dados
        })
        .then(response => {
            localStorage.clear();
            window.location.href = 'http://127.0.0.1:8000/app/pedidos/pedido/' + response.data;
        });
    });
    
});

function getCodigoPedido() {
    let codigo = window.location.href.split('pedido/');
    return codigo[1];
}