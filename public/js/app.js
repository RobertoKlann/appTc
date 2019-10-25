/**Métodos JS globais da aplicação
 * @author Roberto Klann
 * @since 2019/09/19
 */

let urlLogin = 'http://127.0.0.1:8000/auth/login';

$(document).ready(function () {

    $("#voltar-login").on("click", function () {
        window.location.href = urlLogin;
    });    
});

$('.mascaracpf').mask('000.000.000-00', {placeholder: "000.000.000-00"});
$('.mascaratelefone').mask('(47) 9 0000-0000', {placeholder: "(47) 9 0000-0000"});

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