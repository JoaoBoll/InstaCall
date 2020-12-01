<!DOCTYPE HTML>
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
        <link rel="stylesheet" href="editarInstituicao.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Editar Instituição- InstaCall</title>
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body>
        <div class="centralizarTudo">
            <h2>
               Editar Instituição
            </h2>
            <div>

                <table BORDER RULES=NONE class="tabelaPrincipal">
                    <tr>
                        <td id="direita">ID: </td>
                        <td><input type="text" placeholder="Ex: 1234" id="idInst" name="idInst"></td>
                        <td><input type="button" onclick="buscarIdInstituicao()" value="Buscar ID" class="botao"></td>
                    </tr>
                    <tr>
                        <td id="direita"></td>
                        <td><input type="button" style="width: 100%;" class="abrirListaInst botao" id="listarInst" name="listarInst" value="Listar Instituições"></td>
                    </tr>
                    <tr>
                        <td id="direita">Instituição:</td>
                        <td><input type="text" maxlength="50" placeholder="Ex: SOCIESC" id="nomeInst" name="nomeInst"></td>
                    </tr>
                    <tr>
                        <td id="direita">CNPJ: </td>
                        <td><input type="text" maxlength="20" placeholder="Ex: 00.000.000/0000" id="cnpj" name="cnpj"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr id="direita">
                        <td id="direita">CEP: </td>
                        <td><input type="text" placeholder="Ex: 00000-000" id="cep" name="cep"></td>
                        <td><input type="button" onclick="buscaCep()" class="botao" value="Buscar"></td>
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
                        <td><input type="text" placeholder="Ex: 1234" id="numInst" name="numInst"></td>
                    </tr> 
                </table>

                <input type="button" class="botao" value="Salvar" onclick="editarInstituicao()"></input>
                <a href="../menuADM.php" class="mudarPagina"><input type="button" class="botao" value="Voltar"></a>

            </div>
        </div>

        <div id="editarInstModal" class="modal">
            <div class="editarInstModalBox">
                <div class="fundoBranco">
                    <span class="pesquisaLabel">Pesquisar Instituicao: <input type="text" onkeyup="pesquisarInst()" name="pesquisarInst" id="pesquisarInst" class="pesquisarInst"></span><input type="button" value="Limpar Filtro" class="botao" onclick="limparFiltroInst()">
                    <br>
                    <br>
                    <div class="overflow">
                        <center><table BORDER RULES= ALL TABLE ALIGN= CENTER class="tableListarInst" style="width: 100%;" id="tableListarInst">
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