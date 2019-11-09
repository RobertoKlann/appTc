$(document).ready(function() {
    
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