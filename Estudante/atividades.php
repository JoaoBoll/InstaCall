<html>
  <head>
    <link href="atividades.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="../Admin/JS/mask.js"></script>
    <script src="../Admin/JS/Atividade/atividade.js"></script>
    <script src="../Admin/JS/Atividade/buscarAtividades.js"></script>
    <script src="../Admin/JS/Atividade/buscarAlunoAtividade.js"></script>

        <title>Atividades-Estudante-UniSociesc</title>
        
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
                <div>
                    <font class="fonteAtividade">Atividades:</font>
                    <br>
                    <br>
                    <a href="atividadesEncerradas.php"><input type="button" class="botao botaoCriarAtividade" value="Atividades Encerradas"></a>
                    <br>
                    <br>
                    <a href="notas.php"><input type="button" class="botao botaoCriarAtividade" value="Notas"></a>
                    <br>
                    <br>
                    <a href="menu.php"><input type="button" class="botao botaoCriarAtividade" value="Voltar"></a>
                </div>
            </center>
            <table style="display: none;" class="tabelaAluno">
                <tr>
                    <td id="direita">ID:</td>
                    <td><input type="text" disabled  id="idAluno" class="idProf"></td>
                </tr>
                <tr>
                    <td id="direita" >Aluno: </td>
                    <td><input type="text" disabled  id="nomeAluno" class="nomeProf"></td>
                </tr>
                <tr>
                    <td id="direita" >Turma: </td>
                    <td><input type="text" disabled id="turma" class="turma"></td>
                </tr>
                <tr>
                    <td id="direita" >Curso: </td>
                    <td><input type="text" disabled  id="nomeCurso" class="nomeCurso"></td>
                </tr>
            </table>
        </div>
        <div class="borda">
            <table class="tabelaDentro" id="tabelaDeAtividades" style="border: 1px solid black">
            </table>
        </div>
    </body>
</html>