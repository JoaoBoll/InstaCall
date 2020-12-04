$(document).ready(function(){
    jQuery.ajax({
        type: 'POST',
        url: '../Conexao/Professor/buscarProfessor.php',
        datatype: 'json',
        data: {},
        success: function (result, textstatus) {

            let resultado = JSON.parse(result);
            console.log(resultado);
            if (resultado) {
                $('#idProf').val(resultado.idProf);
                $('#nomeProf').val(resultado.nomeProf);
                $('#nomeCurso').val(resultado.nomeCurso);
                $('#turma').val(resultado.idTurma);
                $('#turno').val(resultado.turno);

            } else if(!resultado) {
                window.alert("Professor não encontrado")
                window.location.href="../index.php";
            }
        }, error: function(result) {
            window.alert("Falha nna autenticação.")
            window.location.href="../index.php";
        }
    })
});