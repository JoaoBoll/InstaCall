
/*
cadastro de instituicao
*/

function cadastrarInstituicao(){
    var testeNome = $("#nomeInst").val();
    var testeCnpj = $('#cnpj').val();
    var testeCep = $("#cep").val();
    var testeUf = $("#uf").val();
    var testeCidade = $("#cidade").val();
    var testeBairro = $("#bairro").val();
    var testeLogradouro = $("#logradouro").val();
    var testeNum = $("#numInst").val();
    
    //verifica se os campos estão vazios
    if (testeNome != "" && testeCnpj != "" && testeCep != "" && testeUf != "" && testeCidade != "" && testeBairro != "" && testeLogradouro != "" && testeNum != ""){

        //teste se já possui uma instituição com mesmo CEP e NUM, pois nõa tem como ter 2 instituições no mesmo lugar de forma literal.
        jQuery.ajax({
            type: 'POST',
            url: '../../Conexao/Instituicao/contarInstituicao.php',
            datatype: 'json',
            data: {cnpj: $('#cnpj').val()},
    
            success: function (result, textstatus) {
                
                let resultado = JSON.parse(result);

                //Se resultado for == 0 no select, não ha isntituição igual, então pode registar essa.
                if (resultado.total == 0) {
                    jQuery.ajax({
                        type: 'POST',
                        url: '../../Conexao/Instituicao/cadastrarInstituicao.php',
                        datatype: 'json',
                        data: {nomeInst: $('#nomeInst').val(),cnpj: $('#cnpj').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numInst: $('#numInst').val()},
                
                        success: function (result, textstatus) {
                            
                            let resultParciado = JSON.parse(result);
                
                            if (resultParciado.status) {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                window.alert("Cadastro realizado com sucesso!")
                                window.location.href= "../menuADM.php";
                            } else if (!resultParciado.status) {
                                window.alert('Falha ao conectar ao banco!/nContacte um Administrador');
                            }
                        }
                    })

                } else if (resultado.total != 0) {
                    //Caso tenha uma ou mais com mesmas informações, deverá ocorrer erro ao registrar.
                    window.alert("Instituição já existente");
                }
            }
        })
        
    } else if (testeNome == "" || testeCep == "" || testeNum == "" || testeCnpj == ""){
        //Se campos que são possiveis digitar estiverem vazios, solicita para prencher
        window.alert("Falha ao cadastrar, campos vazios.");

    } else if (testeUf == "" || testeCidade == "" || testeBairro == "" || testeLogradouro == "") {
        //Se área do endereço que só consegue buscando o CEP estiver vazia, solicita a validação
        window.alert("Validação de CEP necessário!");
    }
}

/*
cadastrar curso
*/

function cadastrarCurso(){
    
    var testeNomeCurso = $('#curso').val();
    var testeNivel = $('#nivel').val();
    var testeIdInst = $('#idInst').val();
    var testeNomeInst = $('#nomeInst').val();
    var testeCep = $('#cep').val();
    var testeUf = $('#uf').val();
    var testeCidade = $('#cidade').val();
    var testeBairro = $('#bairro').val();
    var testeLogradouro = $('#logradouro').val();
    var testeNumInst = $('#numInst').val();

    //verifica se os campos estão vazios
    if(testeNomeCurso != "" && testeNivel != "" && testeIdInst != "" && testeNomeInst != "" && testeCep != "" && testeUf != ""  && testeCidade != "" && testeNomeCurso != "" && testeBairro != "" && testeLogradouro != "" && testeNumInst != "") {

        //teste se já possui uma instituição com mesmas informações
        jQuery.ajax({
            type: 'POST',
            url: '../../Conexao/Curso/contarCurso.php',
            datatype: 'json',
            data: {curso: $('#curso').val(), nivel: $('#nivel').val(), idInst: $('#idInst').val()},
    
            success: function (result, textstatus) {
                let resultado = JSON.parse(result);

                //verifica se possui cadastro igual
                if (resultado.total == 0) {

                    jQuery.ajax({
                        type: 'POST',
                        url: '../../Conexao/Curso/cadastrarCurso.php',
                        datatype: 'json',
                        data: {idInst: $('#idInst').val(), curso: $('#curso').val(), nivel: $('#nivel').val()},
                        
                        success: function (result, textstatus) {
    
                            let resultParciado = JSON.parse(result);
                            
                            //Se true, cadastro realizado com sucesso, caso false, ocorreu erro no banco
                            if(resultParciado.status) {
                                window.alert("Cadastro realizado com sucesso!")
                                window.location.href= "../menuADM.php";
                            } else  if(!resultParciado.status){
                                window.alert('Falha ao conectar ao banco!/nContacte um Administrador');
                            } 
                        }
                    })
                } else if(resultado.total != 0) {
                     //Caso tenha uma ou mais com mesmas informações, deverá ocorrer erro ao registrar.
                    window.alert("Curso ja existente")
                }
               
            }
        })

    } else if(testeNomeCurso == "" || testeNivel == "" || testeIdInst == "") {
         //Se campos que são possiveis digitar estiverem vazios, solicita para prencher
        window.alert("Falha ao salvar, campos vazios.")


    
    } else if(testeNomeInst == "" || testeCep != "" || testeUf == "" || testeCidade == "" || testeNomeCurso == "" || testeBairro == "" || testeLogradouro == "" || testeNumInst == ""){
        //Se área do endereço que só consegue buscando o CEP estiver vazia, solicita a validação
        window.alert("Validação de Instituição necessária.");
    }
    
}

/*
cadastrar turma
*/

function cadastrarTurma(){
    
    var testeTurno = $('#turno').val();
    var testeIdCurso = $('#idCurso').val();
    var testeCurso = $('#curso').val();
    var testeNivel = $('#nivel').val();
    var testeInst = $('#instituicao').val();
    var testeCep = $('#cep').val();
    var testeUf = $('#uf').val();
    var testeCidade = $('#cidade').val();
    var testeBairro = $('#bairro').val();
    var testeLogradouro = $('#logradouro').val();
    var testeNumInst = $('#numInst').val();

    //verifica se campos estão vazios
    if (testeTurno != "" && testeIdCurso != "" && testeCurso != "" && testeNivel != "" && testeInst != "" && testeCep != "" && testeUf != "" && testeCidade != "" && testeBairro != "" && testeLogradouro != "" && testeNumInst != "") {

        jQuery.ajax({
            type: 'POST',
            url: '../../Conexao/Turma/cadastrarTurma.php',
            datatype: 'json',
            data: {id: $('#idCurso').val(), turno: $('#turno').val()},
    
            success: function (result, textstatus) {

                resultParciado = JSON.parse(result);
                
                if(resultParciado) {
                    window.alert("Cadastro realizado com sucesso!")
                    window.location.href= "../menuADM.php";
                } else {
                    window.alert('Falha ao conectar ao banco!/nContacte um Administrador');
                } 
            },
        });

    } else if(testeIdCurso == "" || testeTurno == "") {
        //Caso campo nome de curso estiver vazio
        window.alert("Falha ao cadastrar, campos vazios");

    } else if(testeCurso == "" || testeNivel == "" || testeCep == "" || testeInst == "" || testeUf == "" || testeCidade == "" || testeBairro == "" || testeLogradouro == "" || testeNumInst == "") {
        //caso turno não tenha sido seleiconado
        window.alert("Validação de curso necessário.")
    }
    
}

/*
cadastrar professor
*/

function cadastrarProfessor(){
    
    var testeNome = $('#nome').val();
    var testeNascimento = $('#nascimento').val();
    var testeCpf = $('#cpf').val();
    var testeCep = $('#cep').val();
    var testeUf = $('#uf').val();
    var testeCidade = $('#cidade').val();
    var testeBairro = $('#bairro').val();
    var testeLogradouro = $('#logradouro').val();
    var testeNumProf = $('#numero').val();
    var testeFormacao = $('#formacao').val();
    var testeNivel = $('#nivelProf').val();
    var testeInstituicao = $('#nomeInst').val();
    var testeTurma = $('#idTurma').val();
    var testeCurso = $('#curso').val();
    var testeTurno = $('#turno').val();
    var testeLogin = $('#login').val();
    var testeSenha = $('#senha').val();

    //verifica se campos não estão vazios
    if (testeNome != '' && testeNascimento != '' && testeCpf != '' && testeCep != '' && testeUf != '' && testeCidade != '' && testeBairro != '' && testeLogradouro != '' && testeNumProf != '' && testeFormacao != '' && testeNivel != '' && testeInstituicao != '' && testeTurma != '' && testeCurso != '' && testeTurno != '' && testeLogin != '' && testeSenha != '') {

        //verifica se não possui pessoa com mesmo CPF
        jQuery.ajax({
            type: 'POST',
            url: '../../Conexao/Professor/contarCpfProfessor.php',
            datatype: 'json',
            data: {cpf: $('#cpf').val()},
    
            success: function (result, textstatus) {
                resultParciado = JSON.parse(result);
    
                if(resultParciado.total == 0) {

                    jQuery.ajax({
                        type: 'POST',
                        url: '../../Conexao/Aluno/contarCpfAluno.php',
                        datatype: 'json',
                        data: {cpf: $('#cpf').val()},
                
                        success: function (result, textstatus) {
                            resultParciado = JSON.parse(result);
                
                            if(resultParciado.total == 0) {

                                jQuery.ajax({
                                    type: 'POST',
                                    url: '../../Conexao/Professor/contarEmailProf.php',
                                    datatype: 'json',
                                    data: {login: $('#login').val()},
                            
                                    success: function (result, textstatus) {
            
                                        let resultParciado = JSON.parse(result);

                                        if(resultParciado.total == 0) {

                                            jQuery.ajax({
                                                type: 'POST',
                                                url: '../../Conexao/Aluno/contarEmailAluno.php',
                                                datatype: 'json',
                                                data: {login: $('#login').val()},
                                        
                                                success: function (result, textstatus) {
                        
                                                    let resultParciado = JSON.parse(result);
                                        
                                                    if(resultParciado.total == 0) {

                                                        var testeTelefone = $('#telefone').val();
                                                        var testeCelular = $('#celular').val();
                                    
                                                        if(testeTelefone != "" && testeCelular != "") {
                                    
                                                            jQuery.ajax({
                                                                type: 'POST',
                                                                url: '../../Conexao/Professor/cadastrarProfessor.php',
                                                                datatype: 'json',
                                                                data: {nome: $('#nome').val(), cpf: $('#cpf').val(), nascimento: $('#nascimento').val(), telefone: $('#telefone').val(), celular: $('#celular').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numero: $('#numero').val(), formacao: $('#formacao').val(), nivel: $('#nivelProf').val(), nomeInst: $('#nomeInst').val(), idTurma: $('#idTurma').val(), login: $('#login').val(), senha: $('#senha').val()},
                                                        
                                                                success: function (result, textstatus) {
                                    
                                                                    let resultParciado = JSON.parse(result);
                                                        
                                                                    if(resultParciado.status) {
                                                                        window.alert("Cadastro realizado com sucesso!")
                                                                        window.location.href= "../menuADM.php";
                                                                    } else if(!resultParciado.status) {
                                                                        window.alert('Falha ao registrar no banco!/nSe o erro persistir, informe um administrador.');
                                                                    } 
                                                                }
                                                            })
                                    
                                                        } else if(testeTelefone == "" && testeCelular == ""){
                                    
                                                            jQuery.ajax({
                                                                type: 'POST',
                                                                url: '../../Conexao/Professor/cadastrarProfessor1.php',
                                                                datatype: 'json',
                                                                data: {nome: $('#nome').val(), cpf: $('#cpf').val(), nascimento: $('#nascimento').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numero: $('#numero').val(), formacao: $('#formacao').val(), nivel: $('#nivelProf').val(), nomeInst: $('#nomeInst').val(), idTurma: $('#idTurma').val(), login: $('#login').val(), senha: $('#senha').val()},
                                                        
                                                                success: function (result, textstatus) {
                                    
                                                                    resultParciado = JSON.parse(result);
                                                        
                                                                    if(resultParciado.status) {
                                                                        window.alert("Cadastro realizado com sucesso!")
                                                                        window.location.href= "../menuADM.php";
                                                                    } else if(!resultParciado.status) {
                                                                        window.alert('Falha ao registrar no banco!/nSe o erro persistir, informe um administrador.');
                                                                    } 
                                                                }
                                                            })
                                    
                                                        } else if(testeTelefone == "" && testeCelular != "") {
                                    
                                                            jQuery.ajax({
                                                                type: 'POST',
                                                                url: '../../Conexao/Professor/cadastrarProfessor2.php',
                                                                datatype: 'json',
                                                                data: {nome: $('#nome').val(), cpf: $('#cpf').val(), nascimento: $('#nascimento').val(), celular: $('#celular').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numero: $('#numero').val(), formacao: $('#formacao').val(), nivel: $('#nivelProf').val(), nomeInst: $('#nomeInst').val(), idTurma: $('#idTurma').val(), login: $('#login').val(), senha: $('#senha').val()},
                                                        
                                                                success: function (result, textstatus) {
                                    
                                                                    resultParciado = JSON.parse(result);
                                                        
                                                                    if(resultParciado.status) {
                                                                        window.alert("Cadastro realizado com sucesso!")
                                                                        window.location.href= "../menuADM.php";
                                                                    } else if(!resultParciado.status) {
                                                                        window.alert('Falha ao registrar no banco!/nSe o erro persistir, informe um administrador.');
                                                                    } 
                                                                }
                                                            })
                                                            
                                                        } else if(testeTelefone != "" && testeCelular == "") {
                                    
                                                            jQuery.ajax({
                                                                type: 'POST',
                                                                url: '../../Conexao/Professor/cadastrarProfessor3.php',
                                                                datatype: 'json',
                                                                data: {nome: $('#nome').val(), cpf: $('#cpf').val(), nascimento: $('#nascimento').val(), telefone: $('#telefone').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numero: $('#numero').val(), formacao: $('#formacao').val(), nivel: $('#nivelProf').val(), nomeInst: $('#nomeInst').val(), idTurma: $('#idTurma').val(), login: $('#login').val(), senha: $('#senha').val()},
                                                        
                                                                success: function (result, textstatus) {
                                    
                                                                    resultParciado = JSON.parse(result);
                                                        
                                                                    if(resultParciado.status) {
                                                                        window.alert("Cadastro realizado com sucesso!")
                                                                        window.location.href= "../menuADM.php";
                                                                    } else if(!resultParciado.status) {
                                                                        window.alert('Falha ao registrar no banco!/nSe o erro persistir, informe um administrador.');
                                                                    } 
                                                                }
                                                            })
                                    
                                                        }                
                        
                                                    } else if(!resultParciado.total != 0) {
                                                        window.alert('Login já registrado');
                                                    } 
                                                }
                                            })

                                        } else if(resultParciado.total != 0) {
                                            window.alert("Login já registrado");
                                        }
                                    }
                                })
                                           
                            } else if(resultParciado.total != 0){
                                window.alert("CPF já registrado.")
                            }
                        }
                    })
                   
                } else if (resultParciado.total != 0){
                    window.alert('CPF já registrado.');
                } 
            },
        });

    } else if(testeNome == "" || testeNascimento == "" || testeCpf == "" || testeCep == "" || testeNumProf == "" || testeFormacao == "" || testeNivel == "" || testeInstituicao == "" || testeTurma == "" || testeLogin == "" || testeSenha == "") {
        //Caso campo nome de curso estiver vazio
        window.alert("Falha ao cadastrar, campos vazios");

    } else if(testeUf == "" || testeCidade == "" || testeBairro == "" || testeLogradouro == "") {
        //caso CEP não tenha sido verificado
        window.alert("Validação de CEP necessário.")
    } else if(testeCurso == "" || testeTurno == ""){
        //caso Curso/turno não tenha sido verificados
        window.alert("Validação de curso necessário.")
    }
    
}

/*
cadastrar aluno
*/

function cadastrarAluno(){
   
    var testeNome = $('#nome').val();
    var testeNascimento = $('#nascimento').val();
    var testeCpf = $('#cpf').val();
    var testeCep = $('#cep').val();
    var testeUf = $('#uf').val();
    var testeCidade = $('#cidade').val();
    var testeBairro = $('#bairro').val();
    var testeLogradouro = $('#logradouro').val();
    var testeNum = $('#numero').val();
    var testeTurma = $('#idTurma').val();
    var testeCurso = $('#curso').val();
    var testeTurno = $('#turno').val();
    var testeNivel = $('#nivel').val();
    var testeLogin = $('#login').val();
    var testeSenha = $('#senha').val();

    //teste se campos estiverem vazios
    if (testeNome != '' && testeNascimento != '' && testeCpf != '' && testeCep != '' && testeUf != '' && testeCidade != '' && testeBairro != '' && testeLogradouro != '' && testeNum != '' && testeTurma != '' && testeCurso != '' && testeTurno != '' && testeNivel != '' && testeLogin != '' && testeSenha != '') {

        //testar quantidade de alunos com esse CPF
        jQuery.ajax({
            type: 'POST',
            url: '../../Conexao/Aluno/contarCpfAluno.php',
            datatype: 'json',
            data: {cpf: $('#cpf').val()},
    
            success: function (result, textstatus) {

                resultParciado = JSON.parse(result);

                if(resultParciado.total == 0) {

                    //compara CPF com o dos professores
                    jQuery.ajax({
                        type: 'POST',
                        url: '../../Conexao/Professor/contarCpfProfessor.php',
                        datatype: 'json',
                        data: {cpf: $('#cpf').val()},
                
                        success: function (result, textstatus) {

                            resultParciado = JSON.parse(result);

                            if(resultParciado.total == 0) {

                                jQuery.ajax({
                                    type: 'POST',
                                    url: '../../Conexao/Aluno/contarEmailAluno.php',
                                    datatype: 'json',
                                    data: {login: $('#login').val()},
                            
                                    success: function (result, textstatus) {

                                        resultParciado = JSON.parse(result);
                            
                                        if(resultParciado.total == 0) {

                                            jQuery.ajax({
                                                type: 'POST',
                                                url: '../../Conexao/Professor/contarEmailProf.php',
                                                datatype: 'json',
                                                data: {login: $('#login').val()},
                                        
                                                success: function (result, textstatus) {
                                                    
                                                    resultParciado = JSON.parse(result);
                                        
                                                    if(resultParciado.total == 0) {
                                           
                                                        var testeTel = $('telefone').val();
                                                        var testeCel = $('celular').val();
                        
                                                        if (testeTel != "" && testeCel != "") {
                        
                                                            jQuery.ajax({
                                                                type: 'POST',
                                                                url: '../../Conexao/Aluno/cadastrarAluno.php',
                                                                datatype: 'json',
                                                                data: {nome: $('#nome').val(), nascimento: $('#nascimento').val(), cpf: $('#cpf').val(), telefone: $('#telefone').val(), celular: $('#celular').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numero: $('#numero').val(), idTurma: $('#idTurma').val(), login: $('#login').val(), senha: $('#senha').val()},
                                                        
                                                                success: function (result, textstatus) {
                                                                    
                                                                    let resultParciado = JSON.parse(result);
                        
                                                                    if (resultParciado.status) {
                                                                        window.alert("Cadastro realizado com sucesso")
                                                                        window.location.href= "../menuADM.php";
                                                                    } else if (!resultParciado.status) {
                                                                        window.alert('Falha ao registrar no banco!/nSe o erro persistir, informe um administrador.');
                                                                    }
                                                                    
                                                                }
                                                            })
                                                        } else if(testeTel == "" && testeCel == "") {
                        
                                                            jQuery.ajax({
                                                                type: 'POST',
                                                                url: '../../Conexao/Aluno/cadastrarAluno1.php',
                                                                datatype: 'json',
                                                                data: {nome: $('#nome').val(), nascimento: $('#nascimento').val(), cpf: $('#cpf').val(), telefone: $('#telefone').val(), celular: $('#celular').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numero: $('#numero').val(), idTurma: $('#idTurma').val(), login: $('#login').val(), senha: $('#senha').val()},
                                                        
                                                                success: function (result, textstatus) {
                                                                    
                                                                    let resultParciado = JSON.parse(result);
                        
                                                                    if (resultParciado.status) {
                                                                        window.alert("Cadastro realizado com sucesso")
                                                                        window.location.href= "../menuADM.php";
                                                                    } else if (!resultParciado.status) {
                                                                        window.alert('Falha ao registrar no banco!/nSe o erro persistir, informe um administrador.');
                                                                    }
                                                                    
                                                                }
                                                            })
                        
                                                        } else if(testeTel != "" && testeCel == "") {
                        
                                                            jQuery.ajax({
                                                                type: 'POST',
                                                                url: '../../Conexao/Aluno/cadastrarAluno2.php',
                                                                datatype: 'json',
                                                                data: {nome: $('#nome').val(), nascimento: $('#nascimento').val(), cpf: $('#cpf').val(), telefone: $('#telefone').val(), celular: $('#celular').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numero: $('#numero').val(), idTurma: $('#idTurma').val(), login: $('#login').val(), senha: $('#senha').val()},
                                                        
                                                                success: function (result, textstatus) {
                                                                    
                                                                    let resultParciado = JSON.parse(result);
                        
                                                                    if (resultParciado.status) {
                                                                        window.alert("Cadastro realizado com sucesso")
                                                                        window.location.href= "../menuADM.php";
                                                                    } else if (!resultParciado.status) {
                                                                        window.alert('Falha ao registrar no banco!/nSe o erro persistir, informe um administrador.');
                                                                    }
                                                                    
                                                                }
                                                            })
                        
                                                        } else if(testeTel == "" && testeCel != "") {
                        
                                                            jQuery.ajax({
                                                                type: 'POST',
                                                                url: '../../Conexao/Aluno/cadastrarAluno3.php',
                                                                datatype: 'json',
                                                                data: {nome: $('#nome').val(), nascimento: $('#nascimento').val(), cpf: $('#cpf').val(), telefone: $('#telefone').val(), celular: $('#celular').val(), cep: $('#cep').val(), uf: $('#uf').val(), cidade: $('#cidade').val(), bairro: $('#bairro').val(), logradouro: $('#logradouro').val(), numero: $('#numero').val(), idTurma: $('#idTurma').val(), login: $('#login').val(), senha: $('#senha').val()},
                                                        
                                                                success: function (result, textstatus) {
                                                                    
                                                                    let resultParciado = JSON.parse(result);
                        
                                                                    if (resultParciado.status) {
                                                                        window.alert("Cadastro realizado com sucesso")
                                                                        window.location.href= "../menuADM.php";
                                                                    } else if (!resultParciado.status) {
                                                                        window.alert('Falha ao registrar no banco!/nSe o erro persistir, informe um administrador.');
                                                                    }
                                                                    
                                                                }
                                                            })
                        
                                                        }

                                                    
                                                    } else if (resultParciado.total != 0){
                                                        window.alert('Erro! E-mail já cadastrado');
                                                    } 
                                                }
                                            })

                                        }else if (resultParciado.total != 0){
                                            window.alert('Erro! E-mail já cadastrado');
                                        } 
                                    }
                                })   

                            } else if(resultParciado.total != 0) {
                                window.alert("Erro! CPF já cadastrado")
                            }

                        }
                    })
                   
                } else if (resultParciado.total != 0){
                    window.alert('Erro! CPF já cadastrado');
                } 
            }
        })
    //teste se campos necessários estão prenchidos
    } else if (testeNome == '' || testeNascimento == '' || testeCpf == '' || testeCep == '' || testeNum == '' || testeLogin == '' || testeSenha == '') {
        window.alert("Falha ao cadastrar, campos vazios.");

    //teste se campos bloqueados do CEP estão vazios
    } else if (testeUf == '' || testeCidade == '' || testeBairro == '' || testeLogradouro == '' ) {
        window.alert('Validação de CEP necessária.');

    //teste se os campos da turma estão bloqueados
    } else if(testeCurso == '' || testeTurno == '' || testeNivel == '') {
        window.alert('Validação de Turma necessária')
    }
   
}
