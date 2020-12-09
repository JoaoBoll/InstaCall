<html>
  <head>
    <link href="atividades.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="../Admin/JS/mask.js"></script>
    <script src="../Admin/JS/Atividade/buscaProfAtividade.js"></script>


    <title>Atividades-Professor-UniSociesc</title>
        
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body id="fundoCinza">
        <div class="painel">
            <img class="logoSociesc" src="../Imagens/Logo.png" alt="">
            <br>
            <center>
                <font class="fonteAtividade">Atividades:</font>
                <br>
                <br>
                <a href="adicionarAtividade.php"><input type="button" class="botao " value="Adicionar Atividade"></a>
                <br>
                <br>
                <a href="atribuirNota.php"><input type="button" class="botao " value="Atribuir Nota"></a>
                <br>
                <br>
                <a href="atividadesEncerradas.php"><input type="button" class="botao " value="Atividade Encerrada"></a>
                <br>
                <br>
                <a href="editarAtividade.php"><input type="button" class="botao " value="Editar Atividades"></a>
                <br>
                <br>
                <a href="menu.php"><input type="button" class="botao " value="Voltar"></a>
                <br>
            </center>
            <table style="display: none;" class="tabelaProf">
                <tr>
                    <td id="direita">ID:</td>
                    <td><input type="text" disabled   id="idProf" class="idProf"></td>
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
            </table>
        </div>
<!--  -->

        <div class="borda">
            <table class="tabelaDentro" id="tabelaDeAtividades" style="border: 1px solid black">
               
            </table>
        </div>
    </body>
</html>