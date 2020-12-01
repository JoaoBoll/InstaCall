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
                listarFrequencia();
            } else if(!resultado) {
                window.alert("Aluno não encontrado")
                window.location.href="../index.php";
            }
        }
    })
});
function listarFrequencia(){
    
    //tratar
   

    jQuery.ajax({
        type: 'GET',
        url: '../Conexao/Chamada/buscarFrequenciaAluno.php',
        datatype: 'json',
        data: {idTurma: $("#Turma").val(), idAluno: $("#idAluno").val()},
    
        success: function (result, textstatus) {
            console.log(result);
            let dados = JSON.parse(result);

            dados.forEach(d => criarLinhaInst(d));

            //Como forEach trabalha? funcoinamento etc...
        }
    })
}

function retornaLinhaTabela(_id,_nAluno, _dia,_teste, _curso){

    if (_teste == 1) {
        _teste = 'Presente';
    }
    if (_teste == 0) {
        _teste = 'Faltou';
    }
    var html = `<div class="tabelaId">${_id}</div><div class="tabelaId">${_nAluno}</div><div class="tabelaId">${_dia}</div><div class="tabelaDesc">${_teste}</div> <div class="tabelaNome">${_curso}</div>`;

    return html;

}

function criarLinhaInst(dados){
    var table = document.getElementById("tabelaFrequencia");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    
    cell1.innerHTML = retornaLinhaTabela(dados.idTurma,dados.nomeAluno, dados.diaChamada,dados.presenca, dados.nomeCurso);
    
  }
