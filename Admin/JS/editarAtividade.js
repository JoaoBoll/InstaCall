function editarAtividade() {
    
    if ($('#nomeAtividade').val() != "" && $('#descricao').val() != "" && $('#dataFinal').val() != "" && $('#teste').val() != "" && $('#idAtividade').val()){
        if ($('#teste').val() < 2) {
            jQuery.ajax({
                type: 'POST',
                url: '../Conexao/Atividade/editarAtividade.php',
                datatype: 'json',
                data: {nome: $('#nomeAtividade').val(), desc:  $('#descricao').val() , data: $('#dataFinal').val(), status: $('#teste').val(), idAtividade: $('#idAtividade').val()},
                success: function (result, textstatus) {
    
                    let resultado = JSON.parse(result);
                    console.log(resultado);
                    if (resultado.status) {
                        window.alert("Atividade editada com sucesso!")
                        window.location.href="atividades.php"
                    } else if(!resultado.status) {
                        window.alert("Falha ao editar atividade")
                    }
                }
            })
        } else {
            window.alert("Valor de status de atividade não é válido\nDefinir 1 para estar ativo, e 0 para estar encerrado");
        }
    } else {
        window.alert("Campos em branco.");
    }
}

function buscarIdAtividade(){
   
    jQuery.ajax({
        type: 'POST',
        url: '../Conexao/Atividade/buscarIdAtividade.php',
        datatype: 'json',
        data: {idAtividade: $('#idAtividade').val() , idTurma: $('#turma').val() },
        success: function (result, textstatus) {
            console.log(result);
            let resultado = JSON.parse(result);
            console.log(resultado);
            if (resultado) {
                $('#nomeAtividade').val(resultado.nomeAtividade);
                $('#descricao').val(resultado.descricaoAtividade);
                $('#dataFinal').val(resultado.dataLimite);
                $('#teste').val(resultado.teste);
            } else {
                window.alert("Erro ao buscar atividade\nVerifique se atividade existe.")
            }
        }
    })
}