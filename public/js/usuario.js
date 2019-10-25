$(document).ready(function(){
    
    $('#perfil').addClass('ui-btn-active');
    $('#home').removeClass('ui-btn-active');
    $('#pedidos').removeClass('ui-btn-active');
    
    $('.mascaracpf').mask('000.000.000-00', {reverse: true});
    $('.mascaradata').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.mascaratelefone').mask("(00) 0 0000-0000");
});