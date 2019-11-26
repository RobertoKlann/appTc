$(document).ready(function() {


    $("#logout").on("click", function () {
        sessionStorage.removeItem('usuario');
        window.location.href = 'http://127.0.0.1:8000/auth/logout';
    });
    
    $('#perfil').addClass('ui-btn-active');
    $('#home').removeClass('ui-btn-active');
    $('#pedidos').removeClass('ui-btn-active');

    if($('.mascaracpf')[0]) {
        $('.mascaracpf').mask('000.000.000-00', {reverse: true});
    }

    if($('.mascaradata')[0]) {
        $('.mascaradata').mask("00/00/0000", {placeholder: "__/__/____"});    
    }

    if($('.mascaratelefone')[0]) {
        $('.mascaratelefone').mask("(00) 0 0000-0000");
    }
});