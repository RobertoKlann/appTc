/**Métodos JS globais da aplicação
 * @author Roberto Klann
 * @since 2019/09/19
 */

let urlLogin = 'http://127.0.0.1:8000/auth/login';

$(document).ready(function () {

    $("#voltar-login").on("click", function () {
        window.location.href = urlLogin;
    });

    $("#pedidos").on("click", function () {
        window.location.href = 'http://127.0.0.1:8000/app/pedidos/'+ getCodigoUsuario();
    });

    $("a[class=esseSim]").on("click", function (e) {
        e.preventDefault();

        let itens  = JSON.parse(localStorage.getItem('itensCarrinho') || '[]'),
            codigo = this.href.split('produto/');

        itens.push({
            codigo: codigo[1]
        });

        let aItems = JSON.stringify(itens);
        localStorage.setItem('itensCarrinho', aItems);
        window.location.href = 'http://127.0.0.1:8000/app/estabelecimento/produto/' + aItems;
    });
});

if($('.mascaracpf')[0]) {
    $('.mascaracpf').mask('000.000.000-00', {placeholder: "000.000.000-00"});
}

if($('.mascaratelefone')[0]) {
    $('.mascaratelefone').mask('(47) 9 0000-0000', {placeholder: "(47) 9 0000-0000"});
}

/**
 * Permite apenas caracteres númericos.
 */
function onlynumber(evt) {
    let theEvent = evt || window.event,
        key      = theEvent.keyCode || theEvent.which;

    key = String.fromCharCode(key);
    let regex = /^[0-9.]+$/;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault)
            theEvent.preventDefault();
    }
}

function getCodigoUsuario() {
    let codigo = sessionStorage.getItem('usuario')
    return parseInt(codigo);
}