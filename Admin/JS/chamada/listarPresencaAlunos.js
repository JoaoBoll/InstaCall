$(document).ready(function(){

    jQuery.ajax({
        type: 'POST',
        url: '../Conexao/Professor/buscarProfessor.php',
        datatype: 'json',
        data: {},
        success: function (result, textstatus) {

            let resultado = JSON.parse(result);
            if (resultado) {
                $('#idProf').val(resultado.idProf);
                $('#nomeProf').val(resultado.nomeProf);
                $('#nomeCurso').val(resultado.nomeCurso);
                $('#turmaProf').val(resultado.idTurma);
                $('#turno').val(resultado.turno);
                listarpresenca();
            } else if(!resultado) {
                window.alert("Professor não encontrado")
                window.location.href="../index.php";
            }
        }
    })
});

function listarpresenca(){
    jQuery.ajax({
        type: 'POST',
        url: '../Conexao/Chamada/listarPresencaAluno.php',
        datatype: 'json',
        data: {idTurma: $("#turmaProf").val()},
    
        success: function (result, textstatus) {
            console.log(result);
            let dados = JSON.parse(result);
        
            dados.forEach(d => criarLinhaInst(d));

            //Como forEach trabalha? funcoinamento etc...
        }
    })
}

function retornaLinhaTabela(_id, _dia,_teste, _curso){

    var presente;

    if (_teste == 1) {
        _teste = 'Presente';
        presente = true;
    }
    if (_teste == 0) {
        _teste = 'Faltou';
        presente = false;
    }

    var html = `<div class="data">Data: ${_dia}</div><div class="matricula">Matrícula: ${_id}</div><div class="tabelaTeste ${presente? "presente":"faltou"}">${_teste}</div> <div class="tabelaNome">Nome: ${_curso}</div>`;

    return html;

}

function criarLinhaInst(dados){
    var table = document.getElementById("TabelaPresenca");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    
    cell1.innerHTML = retornaLinhaTabela(dados.idTurma,dados.diaChamada,dados.presenca,dados.nomeAluno);
    
  }