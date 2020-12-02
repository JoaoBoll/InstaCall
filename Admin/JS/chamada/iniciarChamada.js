function iniciarChamda(){
    if ($("#data").val() != "") {
        jQuery.ajax({
            type: 'POST',
            url: '../Conexao/Chamada/countChamada.php',
            datatype: 'json',
            data: {idTurma: $("#turmaProf").val(), data: $("#data").val()},
            success: function (result, textstatus) {
                console.log(result);
                let resultado = JSON.parse(result);
                   
                if (resultado.total == 0) {
                    jQuery.ajax({
                        type: 'POST',
                        url: '../Conexao/Chamada/insertChamada.php',
                        datatype: 'json',
                        data: {idTurma: $("#turmaProf").val(), data: $("#data").val()},
                        success: function (result, textstatus) {
                            if (result) {
                                window.alert("chamada aberta.");

                                jQuery.ajax({
                                    type: 'POST',
                                    url: '../Conexao/Chamada/listarAlunoTurma.php',
                                    datatype: 'json',
                                    data: {idTurma: $("#turmaProf").val()},
                                    success: function (result, textstatus) {

                                        let resultado = JSON.parse(result);

                                        resultado.forEach(d => deixarFalta(d, $("#data").val(), $("#turmaProf").val()));
                                        
                                        location.reload();
                                    }
                                })

                              
                            } else {
                                window.alert("Erro inexperado\nCaso o erro persista, chame um Administrador.")
                            }
                        }
                    })
                } else {
                    window.alert("Chamada já existente")
                }
            }
        })
    } else {
        window.alert("Favor inserir data para inciar chamada.")
    }
}

function encerrarChamada(){
    if ($("#data").val() != "") {

        jQuery.ajax({
            type: 'POST',
            url: '../Conexao/Chamada/countFechada.php',
            datatype: 'json',
            data: {idTurma: $("#turmaProf").val(), data: $("#data").val()},
            success: function (result, textstatus) {
                let teste = JSON.parse(result);
            
                if (teste.total == 1) {

                    jQuery.ajax({
                        type: 'POST',
                        url: '../Conexao/Chamada/fecharChamada.php',
                        datatype: 'json',
                        data: {idTurma: $("#turmaProf").val(), data: $("#data").val()},
                        success: function (result, textstatus) {
                            console.log(result);
                            if (result) {
                                window.alert("Chamada encerrada.");
                                location.reload();
                            } else {
                                window.alert("Erro inexperado\nCaso o erro persista, chame um Administrador.")
                            }
                        }
                    })
                } else {
                    window.alert("Chamada não aberta, ou inexistente.")
                }
            }
        })
    } else {
        window.alert("Favor inserir data para inciar chamada.")
    }
}

function reabrirChamada() {
    if ($("#data").val() != "") {

        jQuery.ajax({
            type: 'POST',
            url: '../Conexao/Chamada/countReabrir.php',
            datatype: 'json',
            data: {idTurma: $("#turmaProf").val(), data: $("#data").val()},
            success: function (result, textstatus) {
                let teste = JSON.parse(result);
            
                if (teste.total == 1) {

                    jQuery.ajax({
                        type: 'POST',
                        url: '../Conexao/Chamada/reabrirChamada.php',
                        datatype: 'json',
                        data: {idTurma: $("#turmaProf").val(), data: $("#data").val()},
                        success: function (result, textstatus) {

                            if (result) {
                                window.alert("Chamada Reaberta.");
                                location.reload();
                            } else {
                                window.alert("Erro inexperado\nCaso o erro persista, chame um Administrador.")
                            }
                        }
                    })
                } else {
                    window.alert("Chamada já aberta, ou inexistente.")
                }
            }
        })
    } else {
        window.alert("Favor inserir data para inciar chamada.")
    }
}

function deixarFalta(dados, data, turma) {
    console.log(dados);
    retornaFalta(dados.idAluno,data, turma);
}

function retornaFalta(id, datas, turma){

    jQuery.ajax({
        type: 'POST',
        url: '../Conexao/Chamada/botarFalta.php',
        datatype: 'json',
        data: {idTurma: turma,idAluno: id, dia: datas},
        success: function (result, textstatus) {

            console.log(result)
            let teste = JSON.parse(result);

            if(teste.status) {
                console.log(id);
            } else if (!teste.status) {
                console.log("Erro");
            }
            
        }
    })

}