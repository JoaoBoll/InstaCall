<html>
  <head>
    <link href="atividadesEncerradas.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="../Admin/JS/mask.js"></script>
    <script src="../Admin/JS/Atividade/atividade.js"></script>
    <script src="../Admin/JS/Atividade/buscarProf.js"></script>
    <script src="../Admin/JS/AtividadeEncerrada/buscaProfAtividade.js"></script>
    <script src="../Admin/JS/AtividadeEncerrada/buscarAtividades.js"></script>


    <title>Atividades-Professor-UniSociesc</title>
        
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body id="fundoCinza">
        <div>
            <img class="logoSociesc" src="../Imagens/Logo.png" alt="">
            <br>
            <font class="fonteAtividade">Atividades:</font>
            <br>
            <br>
            <a href="atividades.php"><input type="button" class="botao botaoCriarAtividade" value="Voltar"></a>
            <br>
            <table style="display: none;" class="tabelaProf">
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
                    <td><input type="text" disabled id="turno" class="nomeCurso"></td>
                </tr>
            </table>
        </div>
<!--  -->

        <div class="borda">
            <table class="tabelaDentro" id="tabelaDeAtividades" style="border: 1px solid black">
                <!-- <tr>
                    <td>
                        <table class='bordaFora1'>
                            <tr>
                                <td class="tabelaId">12345</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                    </td>
                    <td></td>
                </tr>
                <tr> 
                    <td></td>
                    <td>
                        <table class="bordaFora2">
                            <tr><td class="tabelaDesc">Aqui vai ficar uma descrição grandinha por isso estou a escrever um pouco mais shre apenas para encher linguiça e depois meter banco de dados e n ficar ruim para entender a situação do que ta acontecendo aqui, por que a nave que caiu em jupter é muito loca e pegou o minério e virou fogo pois o petróleo encontrado no sol virou água </td></tr>
                        </table>
                    </td>
                    <td></td>
                </tr>
                <tr> 
                    <td></td>
                    <td>
                        <table class='bordaFora4'>
                            <tr>
                                <td class="tabelaNome">12345</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="bordaFora3">
                            <td class="tabelaData">Data de entrega:<br>10/10/2010</td>
                        </table>
                    </td>
                </tr> -->
            </table>
        </div>
    </body>
</html>