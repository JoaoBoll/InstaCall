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
                $('#turma').val(resultado.idTurma);
                listarAtividades(resultado.idTurma);
                
            } else if(!resultado) {
                window.alert("Professor não encontrado")
                window.location.href="../index.php";
            }
        }
    })
});
function listarAtividades(idTurma){
    
    //tratar

    jQuery.ajax({
        type: 'GET',
        url: '../Conexao/Atividade/listarAtividade.php',
        datatype: 'json',
        data: {idTurma: idTurma},
    
        success: function (result, textstatus) {
            let dados = JSON.parse(result);
            console.log(dados);
            dados.forEach(d => criarLinhaAtividade(d));

            //Como forEach trabalha? funcoinamento etc...
        }
    })
}



function criarLinhaAtividade(dados){
    var table = document.getElementById("tabelaDeAtividades");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    
    cell1.innerHTML = retornaLinhaTabela(dados.idAtividade, dados.descricaoAtividade,dados.nomeProf, dados.nomeCurso, dados.dataLimite);
    
}

function retornaLinhaTabela(_id, _desc,_nomeProf, _curso, _data){

    var dataBD = _data.split("/");
    var dataLimite = new Date(dataBD[2],dataBD[1]-1,dataBD[0],0,0,0,0);
    var diaAtual = new Date();
    
    var emAtraso = diaAtual - dataLimite > 0;

    var html = `<div class="tabelaId"><p class="titulo">ID: </p>${_id}</div><div class="tabelaProf"><p class="titulo">Professor: </p>${_nomeProf}</div><div class="tabelaDesc"><p class="titulo">Descrição: </p>${_desc}</div> <div class="tabelaNome"><p class="titulo">Curso:</p>${_curso}</div> <div class="tabelaData ${emAtraso?"emAtraso":"emDia"}"><p class="titulo">Data Limite:</p>${_data}</div>`;

    return html;

}