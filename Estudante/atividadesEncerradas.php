<html>
  <head>
    <link href="atividadesEncerradas.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../Admin/JS/mask.js"></script>
    <script src="../Admin/JS/AtividadeEncerrada/buscarAlunoAtividade.js"></script>
    <script src="../Admin/JS/AtividadeEncerrada/buscarAtividades.js"></script>


    <title>Atividades-Estudante-UniSociesc</title>
        
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body id="fundoCinza">
        <img class="logoSociesc" src="../Imagens/Logo.png" alt="">
        <br>
        <div class="painel">
            <center>
            <font class="fonteAtividade">Atividades:</font>
            <br>
            <br>
            <a href="atividades.php"><input type="button" class="botao botaoCriarAtividade" value="Voltar"></a>
            <br>
            <table class="tabelaAluno" style="display: none;">
                <tr>
                    <td id="direita"style="display: none;">ID:</td>
                    <td><input type="text" disabled  id="idAluno" class="idProf"></td>
                </tr>
                <tr>
                    <td id="direita" style="display: none;">Aluno: </td>
                    <td><input type="text" disabled style="display: none;" id="nomeAluno" class="nomeProf"></td>
                </tr>
                <tr>
                    <td id="direita" style="display: none;">Turma: </td>
                    <td><input type="text" disabled style="display: none;" id="turma" class="turma"></td>
                </tr>
                <tr>
                    <td id="direita" style="display: none;">Curso: </td>
                    <td><input type="text" disabled style="display: none;" id="nomeCurso" class="nomeCurso"></td>
                </tr>
            </table>
            </center>
        </div>
        <div class="borda">
            <table class="tabelaDentro" id="tabelaDeAtividades" style="border: 1px solid black">
            </table>
        </div>
    </body>
</html>