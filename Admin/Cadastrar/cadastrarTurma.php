<html>
    <head>
        
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <meta charset="utf-8">
        <script type="text/javascript" src="../JS/mask.js"></script>
        <script type="text/javascript" src="../JS/cadastrar.js"></script>
        <script type="text/javascript" src="../JS/editar.js"></script>
        <script type="text/javascript" src="../JS/tabela.js"></script>
        <link rel="stylesheet" href="cadastrarTurma.css"></link>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar Turma- InstaCall</title>
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body >
        <div class="centralizarTudo">
            <h1>
                Cadastrar Turma
            </h1>
            <form method="POST" action="../Cadastros/cadastrarTurma.php">
                <div>
                    <table class="tabelaPrincipal">
                        <tr>
                            <td id="direita" >ID: </td>
                            <td><input type="text" disabled></td>
                        </tr>
                        <tr>
                            <td id="direita">Turno: </td>
                            <td align="left"><select style="width: 100%;" id="turno" name="turno">
                                <option value=""></option>
                                <option value="Matutino">Matutino</option> 
                                <option value="Vespertino">Vespertino</option>
                                <option value="Noturno">Noturno</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label for="">&nbsp;</label></td>
                        </tr>
                        <tr>
                            <td id="direita">ID Curso: </td>
                            <td><input type="text" id="idCurso" name="idCurso" placeholder="Ex: 12345"></td>
                            <td><input type="button" class="botao" value="Buscar" onclick="buscarIdCurso()"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input style="width: 100%;" type="button" value="Listar Cursos" class="abrirModalCurso botao"></div></td>
                        </tr>
                        <tr>
                            <td id="direita">Curso: </td>
                            <td><input type="text" disabled id="curso" name="curso"></td>
                        </tr>
                        <tr>
                            <td id="direita">Nível: </td>
                            <td><input type="text" disabled id="nivel"></td>
                        </tr>
                        <tr>
                            <td id="direita">Instituição:</td>
                            <td><input type="text" maxlength="50" disabled id="instituicao" name="instituicao"></td>
                        </tr>
                        <tr>
                            <td><label for="">&nbsp;</label></td>
                        </tr>
                        <tr>
                            <td id="direita">CEP: </td>
                            <td><input type="text" disabled id="cep" name="cep"></td>
                        </tr>
                        <tr>
                            <td id="direita">UF: </td>
                            <td><input type="text" id="uf" name="uf" disabled></td>
                        </tr>
                        <tr>
                            <td id="direita">Cidade: </td>
                            <td><input type="text" id="cidade" name="cidade" disabled></td>
                            <td id="direita">Bairro: </td>
                            <td><input type="text" id="bairro" name="bairro" disabled></td>
                        </tr>
                        <tr>
                            <td id="direita">Logradouro: </td>
                            <td><input type="text" id="logradouro" name="logradouro" disabled></td>
                            <td id="direita">N°: </td>
                            <td><input type="text" disabled id="numInst" name="numInst"></td>
                        </tr> 
                    </table>
                </div>
                    <input type="button" class="botao" value="Salvar" onclick="cadastrarTurma()">
                    <a href="../menuADM.php" class="mudarPagina"><input type="button" value="Voltar" class="botao"></a>
            </form>
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