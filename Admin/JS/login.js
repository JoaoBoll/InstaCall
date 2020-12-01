
function loginADM() {

    var testeEmail = $('#loginMenu').val();
    var testeSenha = $('#senhaMenu').val();

    if (testeEmail != "" && testeSenha != "") {

        jQuery.ajax({
            type: 'POST',
            url: './Conexao/Login/loginAdm.php',
            datatype: 'json',
            data: {loginMenu: $('#loginMenu').val(), senhaMenu: $('#senhaMenu').val()},
    
            success: function (result, textstatus) {
                
                let resultParciado = JSON.parse(result);

                if (resultParciado.total == 1) {
                    pegarDadosAdm();
                    window.location.href= "Admin/menuADM.php";
                } else if(resultParciado.total != 1){
                    jQuery.ajax({
                        type: 'POST',
                        url: './Conexao/Login/loginProf.php',
                        datatype: 'json',
                        data: {loginMenu: $('#loginMenu').val(), senhaMenu: $('#senhaMenu').val()},
                
                        success: function (result, textstatus) {
                            
                            let resultParciado = JSON.parse(result);
                
                            if (resultParciado.total == 1) {
                                //PROFESSOR LOGOU
                                pegarDadosProfessor();
                                jQuery.ajax({
                                    type: 'POST',
                                    url: './QuantidadeAcesso/fezLogin.php',
                                    datatype: 'json',
                                    data: {add: true, tipo: "Professor"},
                            
                                    success: function (result, textstatus) {
                                        
                                        console.log(result)
                                        
                                    }
                                })
                                window.location.href= "Professor/menu.php";
                            } else {
                                jQuery.ajax({
                                    type: 'POST',
                                    url: './Conexao/Login/loginEstudante.php',
                                    datatype: 'json',
                                    data: {loginMenu: $('#loginMenu').val(), senhaMenu: $('#senhaMenu').val()},
                            
                                    success: function (result, textstatus) {
                                        
                                        let resultParciado = JSON.parse(result);
                            
                                        if (resultParciado.total == 1) {
                                            //ALUNO LOGOU
                                            pegarDadosAluno();
                                            jQuery.ajax({
                                                type: 'POST',
                                                url: './QuantidadeAcesso/fezLogin.php',
                                                datatype: 'json',
                                                data: {add: true, tipo: "Aluno"},
                                        
                                                success: function (result, textstatus) {
                                                    
                                                    console.log(result)
                                                    
                                                }
                                            })
                                            window.location.href= "Estudante/menu.php";
                                        } else {
                                            window.alert("Falha ao entrar\nLogin ou senha inválidos")
                                        }
                                    }
                                })
                            }
                        }
                    })
                }
            }
        })
    } else if(testeEmail == "" || testeSenha == "") {
        window.alert("Campos vazios.");
    }
 }

function pegarDadosAluno(){
    var aluno = "aluno";

    jQuery.ajax({
        type: 'POST',
        url: './logarSessao.php',
        datatype: 'json',
        data: {loginMenu: $('#loginMenu').val(), senhaMenu: $('#senhaMenu').val(), tipo: aluno},
        
        success: function (result, textstatus) { 

        }
    })
}

function pegarDadosProfessor(){
    var professor = "professor";

    jQuery.ajax({
        type: 'POST',
        url: './logarSessao.php',
        datatype: 'json',
        data: {loginMenu: $('#loginMenu').val(), senhaMenu: $('#senhaMenu').val(), tipo: professor},
        
        success: function (result, textstatus) { 

        }
    })
}

function pegarDadosAdm(){
    var adm = "admin";

    jQuery.ajax({
        type: 'POST',
        url: './logarSessao.php',
        datatype: 'json',
        data: {loginMenu: $('#loginMenu').val(), senhaMenu: $('#senhaMenu').val(), tipo: adm},
        
        success: function (result, textstatus) { 

        }
    })
}