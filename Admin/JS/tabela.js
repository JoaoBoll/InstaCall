
$(document).ready( function (e) {
  $('.abrirListaInst').click(function(){
    $('#editarInstModal').fadeIn(500);
  })
  $('.fechar').click(function(){
    $('#editarInstModal').fadeOut(500)
  })
  $('.abrirModalCurso').click(function(){
    $('#listarCursoModal').fadeIn(500);
  })
  $('.fecharCurso').click(function(){
    $('#listarCursoModal').fadeOut(500)
  })
  $('.abrirModalTurma').click(function(){
    $('#listarTurmaModal').fadeIn(500);
  })
  $('.fecharTurma').click(function(){
    $('#listarTurmaModal').fadeOut(500)
  })
  $('.abrirModalProfessor').click(function(){
    $('#listarProfessorModal').fadeIn(500);
  })
  $('.fecharProfessor').click(function(){
    $('#listarProfessorModal').fadeOut(500)
  })
  $('#abrirModalAluno').click(function(){
    $('#listarAlunoModal').fadeIn(500);
  })
  $('.fecharAluno').click(function(){
    $('#listarAlunoModal').fadeOut(500)
  })
  $('#abrirAlunoChamada').click(function(){
    $('#listarAlunoModal').fadeIn(500);
  })
  $('.fecharAluno').click(function(){
    $('#listarAlunoModal').fadeOut(500)
  })
  $('#abrirAlunoNota').click(function(){
    $('#listarAlunoModal').fadeIn(500);
  })
  $('.fecharAlunoNota').click(function(){
    $('#listarAlunoModal').fadeOut(500)
  })
  if ($('#pesquisarInst').val() == "") {
    listarInst();
  }
  if ($('#pesquisarCurso').val() == "") {
    listarCurso();
  }
  if ($('#pesquisarTurma').val() == "") {
    listarTurma();
  }
  if ($('#pesquisarProfessor').val() == "") {
    listarProfessor();
  }
  if ($('#pesquisarAluno').val() == "") {
    listarAluno();
  }
  if ($('#pesquisarAlunoChamada').val() == "") {
    listarAlunoChamada();
  }
  if ($('#pesquisarAlunoNota').val() == "") {
    listarAlunoNota();
  }

})
/*
modal LitarInst
*/
function listarInst(){
    jQuery.ajax({
        type: 'GET',
        url: '../../Conexao/Pesquisa/tabelaInst.php',
        datatype: 'json',
        data: {},
    
        success: function (result, textstatus) {
            
            let dados = JSON.parse(result);
            dados.forEach(d => criarLinhaInst(d));

            //Como forEach trabalha? funcoinamento etc...
        }
    })
}

function criarLinhaInst(dados){
  var table = document.getElementById("tableListarInst");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);

  cell1.innerHTML = dados.idInst, "teste";
  cell2.innerHTML = dados.nomeInst;
  cell3.innerHTML = dados.logradouroInst;
  cell4.innerHTML = dados.numInst;
  cell5.innerHTML = dados.bairroInst;
  cell6.innerHTML = dados.cidadeInst;
  cell7.innerHTML = dados.ufInst;
  cell8.innerHTML = dados.cepInst;

}

function deletarTabelaInst() {
  var table = document.getElementById("tableListarInst");
  while (table.rows.length > 1){
  	document.getElementById("tableListarInst").deleteRow(-1);
  }
}

function pesquisarInst() {

  var teste = $('#pesquisarInst').val();
    deletarTabelaInst();
    
    jQuery.ajax({
      type: 'POST',
      url: '../../Conexao/Pesquisa/filtroInstNome.php',
      datatype: 'json',
      data: {nomeInst: "%"+$('#pesquisarInst').val()+"%"},

      success: function (result, textstatus) {
          console.log(result);
          let dados = JSON.parse(result);
          dados.forEach(d => criarLinhaInst(d));

          //Como forEach trabalha? funcoinamento etc...
      }
    })
}

function limparFiltroInst(){
  deletarTabelaInst();

  listarInst();

}

/*
modal Curso
*/

function listarCurso(){
  jQuery.ajax({
    type: 'GET',
    url: '../../Conexao/Pesquisa/tabelaCurso.php',
    datatype: 'json',
    data: {},

    success: function (result, textstatus) {
        
        console.log(result)
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasCurso(d));

        //Como forEach trabalha? funcoinamento etc...
    }
})
}

function criarLinhasCurso(dados){
  var table = document.getElementById("tableListarCurso");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);

  cell1.innerHTML = dados.idCurso;
  cell2.innerHTML = dados.nomeCurso;
  cell3.innerHTML = dados.nivelCurso;
  cell4.innerHTML = dados.nomeInst;
  cell5.innerHTML = dados.logradouroInst;
  cell6.innerHTML = dados.bairroInst;
  cell7.innerHTML = dados.cidadeInst;
  cell8.innerHTML = dados.ufInst;

}

function deletarTabelaCurso(){
  var table = document.getElementById("tableListarCurso");
  while (table.rows.length > 1){
  	document.getElementById("tableListarCurso").deleteRow(-1);
  }
}

function pesquisarCurso(){

  deletarTabelaCurso();
  
  jQuery.ajax({
    type: 'POST',
    url: '../../Conexao/Pesquisa/filtroCursoNome.php',
    datatype: 'json',
    data: {nomeCurso: "%"+$('#pesquisarCurso').val()+"%"},

    success: function (result, textstatus) {
        
        let dados = JSON.parse(result);
        console.log(dados);
        dados.forEach(d => criarLinhasCurso(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function limparFiltroCurso(){
  deletarTabelaCurso();
  listarCurso();
}

/*
Modal Turma
*/

function listarTurma(){
  jQuery.ajax({
    type: 'GET',
    url: '../../Conexao/Pesquisa/tabelaTurma.php',
    datatype: 'json',
    data: {},

    success: function (result, textstatus) {
        
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasTurma(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function criarLinhasTurma(dados){
  var table = document.getElementById("tableListarTurma");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  var cell9 = row.insertCell(7);

  cell1.innerHTML = dados.idTurma;
  cell4.innerHTML = dados.turno;
  cell2.innerHTML = dados.NomeCurso;
  cell3.innerHTML = dados.nivelCurso;
  cell5.innerHTML = dados.nomeInst;
  cell6.innerHTML = dados.logradouroInst;
  cell7.innerHTML = dados.bairroInst;
  cell8.innerHTML = dados.cidadeInst;
  cell9.innerHTML = dados.ufInst;

}

function deletarTabelaTurma(){
  var table = document.getElementById("tableListarTurma");
  while (table.rows.length > 1){
  	document.getElementById("tableListarTurma").deleteRow(-1);
  }
}

function pesquisarTurma(){
  deletarTabelaTurma();
  
  jQuery.ajax({
    type: 'POST',
    url: '../../Conexao/Pesquisa/filtroTurmaNome.php',
    datatype: 'json',
    data: {nomeCurso: "%"+$('#pesquisarTurma').val()+"%"},

    success: function (result, textstatus) {
        
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasTurma(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function limparFiltroTurma(){
  deletarTabelaTurma();
  listarTurma();
}

/*
modal Professor
*/

function listarProfessor(){
  jQuery.ajax({
    type: 'GET',
    url: '../../Conexao/Pesquisa/tabelaProfessor.php',
    datatype: 'json',
    data: {},

    success: function (result, textstatus) {
        
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasProfessor(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function criarLinhasProfessor(dados){
  var table = document.getElementById("tableListarProfessor");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  var cell9 = row.insertCell(8);

  cell1.innerHTML = dados.idProf;
  cell2.innerHTML = dados.nomeProf;
  cell3.innerHTML = dados.cpfProf;
  cell4.innerHTML = dados.nascProf;
  cell5.innerHTML = dados.logradouroProf;
  cell6.innerHTML = dados.numProf;
  cell7.innerHTML = dados.bairroProf;
  cell8.innerHTML = dados.cidadeProf;
  cell9.innerHTML = dados.ufProf;

}

function deletarTabelaProfessor(){
  var table = document.getElementById("tableListarProfessor");
  while (table.rows.length > 1){
  	document.getElementById("tableListarProfessor").deleteRow(-1);
  }
}

function pesquisarProfessor(){
  deletarTabelaProfessor();
  console.log("%"+$('#pesquisarProfessor').val()+"%");
  jQuery.ajax({
    type: 'POST',
    url: '../../Conexao/Pesquisa/filtroProfessorCPF.php',
    datatype: 'json',
    data: {cpf: "%"+$('#pesquisarProfessor').val()+"%"},

    success: function (result, textstatus) {
        
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasProfessor(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function limparFiltroProfessor(){
  deletarTabelaProfessor();
  listarProfessor();
}

/*
modalAluno
*/

function listarAluno(){
  jQuery.ajax({
    type: 'GET',
    url: '../../Conexao/Pesquisa/tabelaAluno.php',
    datatype: 'json',
    data: {},

    success: function (result, textstatus) {
        
        console.log(result);
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasAluno(d));
        console.log(dados);
        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function criarLinhasAluno(dados){
  var table = document.getElementById("tableListarAluno");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  var cell9 = row.insertCell(8);

  cell1.innerHTML = dados.idAluno;
  cell2.innerHTML = dados.nomeAluno;
  cell3.innerHTML = dados.cpfAluno;
  cell4.innerHTML = dados.nascAluno;
  cell5.innerHTML = dados.logradouroAluno;
  cell6.innerHTML = dados.numAluno;
  cell7.innerHTML = dados.bairroAluno;
  cell8.innerHTML = dados.cidadeAluno;
  cell9.innerHTML = dados.ufAluno;

}

function deletarTabelaAluno(){
  var table = document.getElementById("tableListarAluno");
  while (table.rows.length > 1){
  	document.getElementById("tableListarAluno").deleteRow(-1);
  }
}

function pesquisarAluno(){
  deletarTabelaAluno();
  console.log("%"+$('#pesquisarAluno').val()+"%");
  jQuery.ajax({
    type: 'POST',
    url: '../../Conexao/Pesquisa/filtroAlunoCPF.php',
    datatype: 'json',
    data: {cpf: "%"+$('#pesquisarAluno').val()+"%"},

    success: function (result, textstatus) {
        
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasAluno(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function limparFiltroAluno(){
  deletarTabelaAluno();
  listarAluno();
}

/*
Modal Aluno Chamada
*/
function listarAlunoChamada(){
  jQuery.ajax({
    type: 'GET',
    url: '../Conexao/Pesquisa/tabelaAluno.php',
    datatype: 'json',
    data: {},

    success: function (result, textstatus) {

        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasAlunoChamada(d));
        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function criarLinhasAlunoChamada(dados){
  var table = document.getElementById("tableListarAluno");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  var cell9 = row.insertCell(8);

  cell1.innerHTML = dados.idAluno;
  cell2.innerHTML = dados.nomeAluno;
  cell3.innerHTML = dados.cpfAluno;
  cell4.innerHTML = dados.nascAluno;
  cell5.innerHTML = dados.logradouroAluno;
  cell6.innerHTML = dados.numAluno;
  cell7.innerHTML = dados.bairroAluno;
  cell8.innerHTML = dados.cidadeAluno;
  cell9.innerHTML = dados.ufAluno;

}

function deletarTabelaAlunoChamada(){
  var table = document.getElementById("tableListarAluno");
  while (table.rows.length > 1){
  	document.getElementById("tableListarAluno").deleteRow(-1);
  }
}

function pesquisarAlunoChamada(){
  deletarTabelaAlunoChamada();
  console.log("%"+$('#pesquisarAluno').val()+"%");
  jQuery.ajax({
    type: 'POST',
    url: '../Conexao/Pesquisa/filtroAlunoCpfCurso.php',
    datatype: 'json',
    data: {cpf: "%"+$('#pesquisarAluno').val()+"%", idTurma: $('#idTurma').val()},

    success: function (result, textstatus) {
        
        console.log(result);
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasAlunoChamada(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function limparFiltroAlunoChamada(){
  deletarTabelaAlunoChamada();
  listarAlunoChamada();
}

/*
listar Aluno Nota
*/

/*
modalAluno
*/

function listarAlunoNota(){
  jQuery.ajax({
    type: 'GET',
    url: '../Conexao/Pesquisa/tabelaAluno.php',
    datatype: 'json',
    data: {},

    success: function (result, textstatus) {
        
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasAlunoNota(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function criarLinhasAlunoNota(dados){
  var table = document.getElementById("tableListarAluno");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  var cell9 = row.insertCell(8);

  cell1.innerHTML = dados.idAluno;
  cell2.innerHTML = dados.nomeAluno;
  cell3.innerHTML = dados.cpfAluno;
  cell4.innerHTML = dados.nascAluno;
  cell5.innerHTML = dados.logradouroAluno;
  cell6.innerHTML = dados.numAluno;
  cell7.innerHTML = dados.bairroAluno;
  cell8.innerHTML = dados.cidadeAluno;
  cell9.innerHTML = dados.ufAluno;

}

function deletarTabelaAlunoNota(){
  var table = document.getElementById("tableListarAluno");
  while (table.rows.length > 1){
  	document.getElementById("tableListarAluno").deleteRow(-1);
  }
}

function pesquisarAlunoNota(){
  deletarTabelaAlunoNota();
  console.log("%"+$('#pesquisarAluno').val()+"%");
  jQuery.ajax({
    type: 'POST',
    url: '../Conexao/Pesquisa/filtroAlunoCPF.php',
    datatype: 'json',
    data: {cpf: "%"+$('#pesquisarAluno').val()+"%"},

    success: function (result, textstatus) {
        
        let dados = JSON.parse(result);
        dados.forEach(d => criarLinhasAluno(d));

        //Como forEach trabalha? funcoinamento etc...
    }
  })
}

function limparFiltroAlunoNota(){
  deletarTabelaAlunoNota();
  listarAlunoNota();
}
