//carrega ao abrir pagina





$(document).ready(function(){

    //carrega lista de setores para menu
    $.get('db/setores.php',function(result){
        $("#listaSetores").html(result);
    })
    


})


//carrega loja
function loja(filtro){
    $.post('db/loja.php',filtro,function(result){
        $("#loja").html(result);
        $("#inicial").hide();
    })
}


function home(){
    $("#loja").html('');
    $("#inicial").show();
}