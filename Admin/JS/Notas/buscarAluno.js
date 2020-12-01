$(document).ready(function(){

    jQuery.ajax({
        type: 'POST',
        url: '../Conexao/Aluno/buscarAluno.php',
        datatype: 'json',
        data: {},
        success: function (result, textstatus) {

            console.log(result);
            let resultado = JSON.parse(result);
            
            if (resultado) {
                $('#idAluno').val(resultado.idAluno);
                $('#nomeAluno').val(resultado.nomeAluno);
                $('#nomeCurso').val(resultado.nomeCurso);
                $('#turma').val(resultado.idTurma);
                listarNota();
            } else if(!resultado) {
                window.alert("Aluno não encontrado");
                window.location.href="../index.php"
            }
        }
    })

});

function listarNota(){
    
    //tratar
   

    jQuery.ajax({
        type: 'GET',
        url: '../Conexao/Atividade/buscarNotaAluno.php',
        datatype: 'json',
        data: {idTurma: $("#turma").val(), idAluno: $("#idAluno").val()},
    
        success: function (result, textstatus) {
            console.log(result);
            let dados = JSON.parse(result);

            dados.forEach(d => criarLinhaInst(d));

            //Como forEach trabalha? funcoinamento etc...
        }
    })
}

function retornaLinhaTabela(_id, _desc,_nomeProf, _curso, _nota){

    var html = `<div class="tabelaId">${_id}</div><div class="tabelaId">${_nomeProf}</div><div class="tabelaDesc">${_desc}</div> <div class="tabelaNome">${_curso}</div> <div class="tabelaNota">${_nota}</p></div>`;

    return html;

}

function criarLinhaInst(dados){
    var table = document.getElementById("tabelaDeNota");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    
    cell1.innerHTML = retornaLinhaTabela(dados.idAtividade, dados.descricaoAtividade,dados.nomeProf, dados.nomeCurso, dados.nota);
    
  }