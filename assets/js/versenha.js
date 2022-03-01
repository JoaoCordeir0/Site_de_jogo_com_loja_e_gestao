$(function(){
    var senha = $('#senha');
    var olho= $("#olho");
    olho.mousedown(function() {
    senha.attr("type", "text");
    });
    olho.mouseup(function() {
    senha.attr("type", "password");
    });
    // para evitar o problema de arrastar a imagem e a senha continuar exposta, 
    //citada pelo nosso amigo nos comentários
    $( "#olho" ).mouseout(function() { 
    $("#senha").attr("type", "password");
    });
});

$(function(){
    var senha = $('#senha1');
    var olho= $("#olho1");
    olho.mousedown(function() {
    senha.attr("type", "text");
    });
    olho.mouseup(function() {
    senha.attr("type", "password");
    });
    // para evitar o problema de arrastar a imagem e a senha continuar exposta, 
    //citada pelo nosso amigo nos comentários
    $( "#olho1" ).mouseout(function() { 
    $("#senha1").attr("type", "password");
    });
});

$(function(){
    var senha = $('#senha2');
    var olho= $("#olho2");
    olho.mousedown(function() {
    senha.attr("type", "text");
    });
    olho.mouseup(function() {
    senha.attr("type", "password");
    });
    // para evitar o problema de arrastar a imagem e a senha continuar exposta, 
    //citada pelo nosso amigo nos comentários
    $( "#olho2" ).mouseout(function() { 
    $("#senha2").attr("type", "password");
    });
});