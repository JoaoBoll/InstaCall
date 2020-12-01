<html>
    <head>
        
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <meta charset="utf-8">
        <script type="text/javascript" src="../JS/editar.js"></script>
        <script type="text/javascript" src="../JS/mask.js"></script>
        <script type="text/javascript" src="../JS/cep.js"></script>
        <script type="text/javascript" src="../JS/tabela.js"></script>
        <link rel="stylesheet" href="editarProfessor.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Editar Professor- InstaCall</title>
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body>
        <div class="centralizarTudo" style="margin-top: 30px;">
            <h1>
                Editar Matrícula - Professor
            </h1>
            <div>
                <table class="tabelaPrincipal">
                    <tr>
                        <td id="direita">Matrícula: </td>
                        <td><input type="text" placeholder="Ex: 000000000" id="matricula" class="matricula"></td>
                        <td><div align="left"><input type="button" class="botao" value="Buscar" onclick="buscarIdProfessor()"></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" class="abrirModalProfessor botao" style="width: 100%;" value="Buscar Professor"></td>
                    </tr>
                    <tr>
                        <td id="direita">Nome:</td>
                        <td><input type="text" placeholder="Ex: Nome" id="nome" name="nome"></td>
                    </tr>
                    <tr>
                        <td id="direita">Nascimento: </td>
                        <td><input type="text" placeholder="01/01/2000" name="nascimento" id="nascimento"></td>
                        <td id="direita">CPF:</td>
                        <td><input type="text" placeholder="Ex: 000.000.000-00" name="cpf" id="cpf"><br></td>
                    </tr>
                    <tr>
                        <td id="direita">Telefone: </td>
                        <td><input type="text" name="telefone" placeholder="Ex: (00) 0000-0000" id="telefone"></td>
                        <td id="direita">Celular: </td>
                        <td><input type="text" name="celular" placeholder="Ex: (00) 0 0000-0000" id="celular"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">CEP: </td>
                        <td><input type="text" placeholder="Ex: 00000-00" id="cep" name="cep"></td>
                        <td><div align="left"><input type="button" onclick="buscaCep()" class="botao" value="Buscar"></div></td>
                    </tr>
                    <tr>
                        <td id="direita">UF: </td>
                        <td><input type="text" disabled id="uf" name="estado"></td>
                    </tr>
                    <tr>
                        <td id="direita">Cidade: </td>
                        <td><input type="text" disabled id="cidade" name="cidade"></td>
                        <td id="direita">Bairro: </td>
                        <td><input type="text" disabled id="bairro" name="bairro"></td>
                    </tr>
                    <tr>
                        <td id="direita">Logradouro: </td>
                        <td><input type="text" disabled id="logradouro" name="logradouro"></td>
                        <td id="direita">N°: </td>
                        <td><input type="text" placeholder="Ex: 1234" id="numero" name="numero"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr> 
                    <tr>
                        <td id="direita">Formação: </td>
                        <td><input type="text" placeholder="Ex: Sistemas de Informação" name="formacao" id="formacao"><br></td>
                        <td><select id="nivelProf" name="nivel" name="selectCurso">
                            <option value=""></option>
                            <option value="Bacharelado">Bacharelado</option> 
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Tecnólogo">Tecnólogo</option>
                            <option value="Mestrado">Mestrado</option>
                            <option value="Doutorado">Doutorado</option>
                            <option value="Graduação">Pós-Graduação</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td id="direita">Instituição: </td>
                        <td><input type="text" placeholder="Ex: UniSociesc" id="nomeInst"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">Turma:  </td>
                        <td><input type="text" placeholder="Ex: 1234" id="idTurma" name="idTurma"></td>
                        <td><div align="left"><input type="button" onclick="buscarIdTurma2()" value="Buscar" class="botao"></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input style="width: 100%;" type="button" value="Listar Turmas" class="abrirModalTurma botao"></td>
                    </tr>
                    <tr>
                        <td id="direita">Curso: </td>
                        <td><input type="text" disabled id="curso" name="curso"></td>
                    </tr>
                    <tr>
                        <td id="direita">Turno: </td>
                        <td><input type="text" disabled id="turno" name="turno"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">Login: </td>
                        <td><input type="text" placeholder="Ex: professor@instituicao.com" id="login" name="email"></td>
                        <td id="direita">Senha: </td>
                        <td><input type="text" placeholder="Ex: 123456789" id="senha" name="senha"></td>
                    </tr>
                </table>
            </div>
            <div>
                <input type="button" class="botao" onclick="editarProfessor()" value="Salvar">
                <a href="../menuADM.php" class="mudarPagina"><input type="button" class="botao" value="Voltar"></a>
            </div>
        </div>
        <div id="listarProfessorModal" class="modalProfessor">
            <div class="listarProfessorModalBox">
                <div class="fundoBrancoProfessor">
                    <span class="pesquisaLabel">Pesquisar CPF: <input type="text" onkeyup="pesquisarProfessor()" id="pesquisarProfessor" class="cpf pesquisarProfessor" name="pesquisarProfessor"></span><input type="button" value="Limpar Filtro" style="width: 100px;" class="botao" onclick="limparFiltroProfessor()">
                    <br>
                    <br>
                    <div class="overflow">
                        <center>
                            <table BORDER RULES = ALL class="tableListarProfessor" id="tableListarProfessor" style="width: 100%;">
                                <tr>
                                    <th class="tableModal1">Matrícula</th>
                                    <th class="tableModal2">Nome</th>
                                    <th class="tableModal3">CPF</th>
                                    <th class="tableModal3">Nascimento</th>
                                    <th class="tableModal4">Logradouro</th>
                                    <th class="tableModal5">N°</th>
                                    <th class="tableModal6">Bairro</th>
                                    <th class="tableModal7">Cidade</th>
                                    <th class="tableModal8">UF</th>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
                <div class="fecharProfessor"><a onclick="">X</a></div>
            </div>
        </div>
        <div id="listarTurmaModal" class="modalTurma">
            <div class="listarTurmaModalBox">
                <div class="fundoBrancoTurma">
                    <span class="pesquisaLabel">Pesquisar Nome: <input type="text" onkeyup="pesquisarTurma()" id="pesquisarTurma" class="pesquisarCurso" name="pesquisarTurma"></span><input type="button" value="Limpar Filtro" style="width: 100px;" class="botao" onclick="limparFiltroTurma()">
                    <br>
                    <br>
                    <div class="overflow">
                        <center>
                            <table BORDER RULES = ALL class="tableListarTurma" id="tableListarTurma" style="width: 100%;">
                                <tr>
                                    <th class="tableModal1">ID</th>
                                    <th class="tableModal2">Curso</th>
                                    <th class="tableModal3">Nivel</th>
                                    <th class="tableModal3">Turno</th>
                                    <th class="tableModal4">Instituicao</th>
                                    <th class="tableModal5">Logradouro</th>
                                    <th class="tableModal6">Bairro</th>
                                    <th class="tableModal7">Cidade</th>
                                    <th class="tableModal8">UF</th>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
                <div class="fecharTurma"><a onclick="">X</a></div>
            </div>
        </div>
    </body>
</html>