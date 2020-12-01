<html>
  <head>
    <link rel="stylesheet" href="adicionaratividade.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="../Admin/JS/mask.js"></script>
    <script src="../Admin/JS/Atividade/buscaProf.js"></script>
    <script src="../Admin/JS/editarAtividade.js"></script>
    <script></script>

        <title>Atividades-Professor-UniSociesc</title>
        
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body id="fundoCinza">
        </script>
        <center><div class="margem1">

            <font class="fonteAddAtividade">Editar Atividades:</font>

        </div></center>
        <center><div class="margem2">
            <table>
                <tr>
                    <td id="direita">ID:</td>
                    <td><input type="text" disabled id="idProf" class="idProf"></td>
                </tr>
                <tr>
                    <td id="direita">Professor: </td>
                    <td><input type="text" disabled id="nomeProf" class="nomeProf"></td>
                </tr>
                <tr>
                    <td id="direita">Turma: </td>
                    <td><input type="text" disabled id="turma" class="turma"></td>
                </tr>
                <tr>
                    <td id="direita">Curso: </td>
                    <td><input type="text" disabled id="nomeCurso" class="nomeCurso"></td>
                </tr>
                <tr>
                    <td id="direita">Turno: </td>
                    <td><input type="text" disabled id="turno" class="turno"></td>
                </tr>
                <tr>
                    <td><label for="">&nbsp;</label></td>
                </tr>
                <tr>
                    <td id="direita">ID: </td>
                    <td><input type="text" id="idAtividade" class="idAtividade"><input type="button" onclick="buscarIdAtividade()" class="botao2" value="Buscar"></td>

                </tr>
                <tr>
                    <td id="direita">Nome: </td>
                    <td><input type="text" maxlength="100" placeholder="Ex: Pesquisar sobre..." class="nomeAtividade" id="nomeAtividade"></td>
                </tr>
                <tr>
                    <td id="direita">Descrição: </td>
                    <td><textarea maxlength="1000" placeholder="Descrição da atividade" class="descricao" id="descricao"></textarea>
                </tr>
                <tr>
                    <td id="direita">Data Final: </td>
                    <td><input type="text" id="dataFinal" name="dataFinal" class="dataFinal"></td>
                </tr>
                <tr>
                    <td id="direita">Aberta: 0/N 1/S </td>
                    <td><input type="text" id="teste" name="teste" class="dataFinal"></td>
                </tr>
            </table>
            <br>
            <input type="button" class="botao botaoCriarAtividade" onclick="editarAtividade()" value="Editar Atividade"></a>
            <a href="atividades.php"><input type="button" class="botao2" value="Voltar"></a>
        </div></center>
    </body>
</html>