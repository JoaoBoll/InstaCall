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
        <link rel="stylesheet" href="cadastrarCurso.css"></link>

        <title>Cadastrar Curso- InstaCall</title>
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body>
        <div class="centralizarTudo">
            <h1>
                Cadastrar Curso
            </h1>
            <div>
                <table class="tabelaPrincipal">
                    <tr>
                        <td id="direita">Curso: </td>
                        <td><input type="text" maxlength="50" placeholder="Ex: Sistemas de Informação" id="curso" name="curso"></td>
                        <td></td>
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
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">ID Instituição: </td>
                        <td><input type="text" placeholder="Ex: 0001" id="idInst" name="idInst"></td>
                        <td><input type="button"  onclick="buscarIdInstituicao()" class="botao" value="Buscar"></input></td>
                    </tr>
                        <td></td>
                        <td><input  type="button" style="width: 100%;" class="abrirListaInst botao" value="Listar de Instituições"></input></td>
                    <tr>
                        <td id="direita">Instituição: </td>
                        <td><input type="text" disabled id="nomeInst" name="nomeInst"></td>
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
                        <td><input type="text" disabled id="cidade" name="cidade"></td>
                        <td id="direita">Bairro: </td>
                        <td><input type="text" disabled id="bairro" name="bairro"></td>
                    </tr>
                    <tr>
                        <td id="direita">Logradouro: </td>
                        <td><input type="text" disabled id="logradouro" name="logradouro"></td>
                        <td id="direita">N°: </td>
                        <td><input type="text" disabled id="numInst" name="numInst"></td>
                    </tr>
                
                </table>
                <input type="button" class="botao" onclick="cadastrarCurso()" value="Salvar"></input>
              <a href="../menuADM.php" style="text-decoration: none; color: black;"><input type="button" value="Voltar" class="botao"></a>
            
            </div>
        </div>

        <div id="editarInstModal" class="modal">
            <div class="editarInstModalBox">
                <div class="fundoBranco">
                    <span class="pesquisaLabel">Pesquisar Nome: <input type="text" onkeypress="pesquisarInst()" name="pesquisarInst" id="pesquisarInst" class="pesquisarInst"></span><input type="button" value="Limpar Filtro" class="botao" onclick="limparFiltroInst()">
                    <br>
                    <br>
                    <div class="overflow">
                        <center><table style="width: 100%;" BORDER RULES= ALL TABLE ALIGN= CENTER class="tableListarInst" id="tableListarInst">
                            <tr>
                                <th class="tableModal1">ID</th>
                                <th class="tableModal2">Instituição</th>
                                <th class="tableModal3">Logradouro</th>
                                <th class="tableModal4">N°</th>
                                <th class="tableModal5">Bairro</th>
                                <th class="tableModal6">Cidade</th>
                                <th class="tableModal7">UF</th>
                                <th class="tableModal8">CEP</th>
                            </tr>
                        </table></center>
                    </div>
                </div>
                <div class="fechar"><a onclick="">X</a></div>
            </div>
        </div>
    </body>
</html>

    </body>
</html>