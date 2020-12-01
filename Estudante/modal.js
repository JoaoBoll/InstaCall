$(document).ready( function (e) {
    $('.botaoChamada').click(function(){
        $('#chamadaModal').fadeIn(500);
    });

    $('.fechar').click(function(){
        $('#chamadaModal').fadeOut(500)
    })
})