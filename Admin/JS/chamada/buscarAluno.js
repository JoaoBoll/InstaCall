$(document).ready(function(){

    jQuery.ajax({
        type: 'POST',
        url: '../Conexao/Aluno/buscarAluno.php',
        datatype: 'json',
        data: {},
        success: function (result, textstatus) {

            let resultado = JSON.parse(result);
            if (resultado) {
                $('#idAluno').val(resultado.idAluno);
                $('#nomeAluno').val(resultado.nomeAluno);
                $('#nomeCurso').val(resultado.nomeAluno);
                $('#Turma').val(resultado.idAluno);
                listarChamadas();
            } else if(!resultado) {
                window.alert("Aluno não encontrado")
                window.location.href="../index.php";
            }
        }
    })
});
function listarChamadas(){
    
    //tratar
   

    jQuery.ajax({
        type: 'GET',
        url: '../Conexao/Chamada/buscarListaChamadaAluno.php',
        datatype: 'json',
        data: {idTurma: $("#Turma").val()},
    
        success: function (result, textstatus) {
            console.log(result);
            let dados = JSON.parse(result);

            dados.forEach(d => criarLinhaInst(d));

            //Como forEach trabalha? funcoinamento etc...
        }
    })
}

function retornaLinhaTabela(_id, _dia,_teste, _curso){

    if (_teste == 1) {
        _teste = 'Liberado';
    }
    if (_teste == 0) {
        _teste = 'Encerrado';
    }
    var html = `<div class="tabelaId">${_id}</div><div class="tabelaId">${_dia}</div><div class="tabelaDesc">${_teste}</div> <div class="tabelaNome">${_curso}</div>`;

    return html;

}

function criarLinhaInst(dados){
    var table = document.getElementById("tabelaDeChamada");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    
    cell1.innerHTML = retornaLinhaTabela(dados.idTurma, dados.dia,dados.teste, dados.nomeCurso);
    
  }

function confirmarPresenca() {

    if ($("#data").val() != "" && $('#idAluno').val() != "" && $('#Turma').val() != "") {
        jQuery.ajax({
            type: 'POST',
            url: '../Conexao/chamada/contarRegistro.php',
            datatype: 'json',
            data: {idTurma:  $('#idAluno').val(), idTurma: $('#Turma').val(), data: $("#data").val()},
            success: function (result, textstatus) {

                let resultado = JSON.parse(result);
                if (resultado.total == 0) {
                    jQuery.ajax({
                        type: 'POST',
                        url: '../Conexao/chamada/confirmarPresenca.php',
                        datatype: 'json',
                        data: {idAluno:  $('#idAluno').val(), idTurma: $('#Turma').val(), data: $("#data").val()},
                        success: function (result, textstatus) {
            
                            let resultado = JSON.parse(result);
                            if (resultado) {
                                window.alert("Registro feito com sucesso!")
                            } else if(!resultado) {
                                window.alert("Falha ao registrar presença")
                                window.location.href="../index.php";
                            }
                        }
                    })
                } else {
                    window.alert("Presença já confirmada")
                    window.location.href="../index.php";
                }
            }
        })
        
        
    } else {
        window.alert("Campos vazios");
    }

}