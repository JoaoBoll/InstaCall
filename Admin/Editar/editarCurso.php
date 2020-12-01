<html>
    <head>
        
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <meta charset="utf-8">
        <script type="text/javascript" src="../JS/editar.js"></script>
        <script type="text/javascript" src="../JS/mask.js"></script>
        <script type="text/javascript" src="../JS/tabela.js"></script>
        <link rel="stylesheet" href="editarCurso.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Editar Curso- InstaCall</title>
    </head>
    <body>
        <header>
            <div id="topoInstaCall">
                <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
            </div>
        </header>
        <div class="centralizarTudo">
            <h1>
                Editar Curso
            </h1>
           
            <div>
                <table class="tabelaPrincipal">
                    <tr>
                        <td id="direita">ID Curso: </td>
                        <td><input type="text" placeholder="Ex: 12345" id="idCurso" name="idCurso"></td>
                        <td><input type="button" class="botao" value="Buscar ID" onclick="buscarIdCurso();"></input></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" class="abrirModalCurso botao" style="width: 100%;" value="Listar Cursos"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">Curso: </td>
                        <td><input type="text" maxlength="50" placeholder="Ex: Sistemas de Informação" id="pesquisarAluno curso" name="curso"></td>
                    </tr>
                    <tr>
                        <td id="direita">Nível: </td>
                        <td align="left"><select style="width: 100%;" id="nivel" name="nivel">
                            <option value=""></option>
                            <option value="Bacharelado">Bacharelado</option> 
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Tecnólogo">Tecnólogo</option>
                            <option value="Mestrado">Mestrado</option>
                            <option value="Doutorado">Doutorado</option>
                            <option value="Pós-Graduação">Pós-Graduação</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td id="direita">ID Inst: </td>
                        <td><input type="text" disabled id="idInst" name="idInst"></td>
                    </tr>
                    <tr>
                        <td id="direita">Instituição: </td>
                        <td><input type="text" disabled id="instituicao" name="instituicao"></td>
                    </tr>
                    <tr>
                        <td id="direita">CEP: </td>
                        <td><input type="text" disabled id="cep" name="cep"></td>
                    </tr>
                    <tr>
                        <td id="direita">UF: </td>
                        <td><input type="text" disabled id="uf" name="uf"></td>
                    </tr>
                    <tr>
                        <td id="direita">Cidade: </td>
                        <td><input type="text"  disabled id="cidade" name="cidade"></td>
                        <td id="direita">Bairro: </td>
                        <td><input type="text"  id="bairro" disabled name="bairro"></td>
                    </tr>
                    <tr>
                        <td id="direita">Logradouro: </td>
                        <td><input type="text" disabled id="logradouro" name="logradouro"></td>
                        <td id="direita">N°: </td>
                        <td><input type="text" disabled id="numInst" name="numInst"></td>
                    </tr> 
                </table>
                <input type="button" class="botao" onclick="editarCurso();" value="Salvar">
                <a href="../menuADM.php"><input type="button" class="botao" class="botoes" value="Voltar"></a>
            </div>
        </div>
                    
        <div id="listarCursoModal" class="Modal">
            <div class="listarInstModalBox">
                <div class="fundoBranco">
                    <span class="pesquisaLabel">Pesquisar Nome: <input type="text" onkeyup="pesquisarCurso()" id="pesquisarCurso" class="pesquisarCurso" name="pesquisarCurso"></span><input type="button" value="Limpar Filtro" style="width: 100px;" class="botao" onclick="limparFiltroCurso()">
                    <br>
                    <br>
                    <div class="overflow">
                        <center>
                            <table BORDER RULES = ALL class="tableListarCurso" id="tableListarCurso" style="width: 100%;">
                                <tr>
                                    <th class="tableModal1">ID</th>
                                    <th class="tableModal2">Curso</th>
                                    <th class="tableModal3">Nivel</th>
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
                <div class="fecharCurso"><a onclick="">X</a></div>
            </div>
        </div>    
        
    </body>
</html>