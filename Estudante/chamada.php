<html>
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script type="text/javascript" src="../Admin/JS/mask.js"></script>
    <script type="text/javascript" src="../Admin/JS/tabela.js"></script>
    <script type="text/javascript" src="../Admin/JS/Chamada/buscarAluno.js"></script>
    <link rel="stylesheet" href="chamada.css">

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
            <font class="fonteAtividade">Chamadas:</font>
                <table style="display: none">
                    <tr>
                        <td id="direita">Matrícula:</td>
                        <td><input type="text" disabled id="idAluno"></td>
                    <tr>
                        <td id="direita">Aluno:</td>
                        <td><input type="text" id="nomeAluno" disabled></td>
                    </tr>
                    <tr>
                        <td id="direita">Turma</td>
                        <td><input type="text" id="Turma" disabled></td>
                    </tr>
                    <tr>
                        <td id="direita">Curso:</td>
                        <td><input type="text" id="nomeCurso" disabled></td>
                    </tr>
                </table>
                <input type="text" id="data" placeholder="Ex: 02/02/2002">
                <input type="button" class="botao" onclick="confirmarPresenca()" value="Confirmar Presença">
                <a href="menu.php"><input type="button" class="botao" value="Voltar"></a>
            </center>
        </div>
        <div class="borda">
            <table class="tabelaDentro" id="tabelaDeChamada" style="border: 1px solid black">
            </table>
        </div>
    </body>
</html>