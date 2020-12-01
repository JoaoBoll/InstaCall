<html>
  <head>
    <link rel="stylesheet" href="atribuirNota.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <meta charset="utf-8">
    <script src="../Admin/JS/mask.js"></script>
    <script src="../Admin/JS/Atividade/buscaProfTurma.js"></script>
    <script src="../Admin/JS/tabela.js"></script>
    <script src="../Admin/JS/editarAtividade.js"></script>
    <script src="../Admin/JS/editar.js"></script>
    <script src="../Admin/JS/Atividade/atribuirNota.js"></script>
    
        <title>Atividades-Professor-UniSociesc</title>
        
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body id="fundoCinza">
        <div class="centralizarTudo">
           <div class="margem1">
                <center><font class="fonteAddAtividade">Atribuir Nota</font>
                </div></center>
               <div class="margem2">
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
                            <td><input type="text" disabled id="turmaProf" class="turma"></td>
                        </tr>
                        <tr>
                            <td id="direita">Curso: </td>
                            <td><input type="text" disabled id="nomeCurso" class="nomeCurso"></td>
                        </tr>
                    </table>
                    <table >
                        <tr>
                            <td id="direita">Matrícula:</td>
                            <td id="esquerda"><input type="text" placeholder="Ex: 12345" id="matricula"> <input type="button" onclick="buscarIdAlunoProf()" class="botao2" value="Buscar"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td id="esquerda"><input type="button" id="abrirAlunoNota" class="botao4 botao" value="Listar Alunos"></td>
                        </tr>
                        <tr>
                            <td id="direita">Aluno:</td>
                            <td id="esquerda"><input type="text" id="nome" disabled></td>
                        </tr>
                        <tr>
                            <td id="direita">Turma</td>
                            <td id="esquerda"><input type="text" id="turma" disabled></td>
                        </tr>
                        <tr>
                            <td id="direita">Curso:</td>
                            <td id="esquerda"><input type="text" id="curso" disabled></td>
                        </tr>
                        <tr>
                            <td id="direita">Turno: </td>
                            <td id="esquerda"><input type="text" disabled id="turno"></td>
                        </tr>
                        <tr>
                            <td id="esquerda"><label for="">&nbsp;</label></td>
                        </tr>
                        <tr>
                            <td id="direita">ID: </td>
                            <td id="esquerda"><input placeholder="Ex: 12345" type="text" id="idAtividade" class="idAtividade"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td id="esquerda"><input type="button" onclick="buscarIdAtividade()" class="botao2 botao3" value="Buscar Atividade"></td>
                        </tr>
                        <tr>
                            <td id="direita">Nome: </td>
                            <td id="esquerda"><input type="text" maxlength="100" disabled class="nomeAtividade" id="nomeAtividade"></td>
                        </tr>
                        <tr>
                            <td id="direita">Descrição: </td>
                            <td id="esquerda"><textarea maxlength="1000" disabled class="descricao" id="descricao"></textarea>
                        </tr>
                        <tr>
                            <td id="direita">Data Final: </td>
                            <td id="esquerda"><input type="text" disabled id="dataFinal" name="dataFinal" class="dataFinal"></td>
                        </tr>
                        <tr>
                            <td id="direita">Nota: </td>
                            <td id="esquerda"><input type="text" id="nota" placeholder="Ex: 20" name="nota" class="nota"></td>
                        </tr>
                    </table>
                    <br>
                    <center><input type="button" class="botao botaoCriarAtividade" onclick="atribuirNota()" value="Atribuir Nota"></a>
                    <a href="atividades.php"><input type="button" class="botao2" value="Voltar"></a></center>
                </div>
        </div>
        
        <div id="listarAlunoModal" class="modalAluno">
            <div class="listarAlunoModalBox">
                <div class="fundoBrancoAluno">
                    <span class="pesquisaLabel">Pesquisar CPF: <input type="text" onkeyup="pesquisarAlunoNota()" on ="pesquisarAluno()" id="pesquisarAlunoNota" class="cpf pesquisarAluno" name="pesquisarAluno"></span><input type="button" value="Limpar Filtro" style="width: 100px;" class="botao" onclick="limparFiltroAluno()">
                    <br>
                    <br>
                    <div class="overflow">
                        <center>
                            <table BORDER RULES = ALL class="tableListarAluno" id="tableListarAluno" style="width: 100%;">
                                <tr>
                                    <th class="tableModal1">Matrícula</th>
                                    <th class="tableModal2">Nome</th>
                                    <th class="tableModal3">CPF</th>
                                    <th class="tableModal3">Nascimento</th>
                                    <th class="tableModal4">Logradouro</th>
                                    <th class="tableModal5">N°</th>
                                    <th class="tableModal6">Bairro</th>
                                    <th class="tableModal7">Cidade</th>
                                    <th class="tableModal8">UF</th>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
                <div class="fecharAlunoNota"><a onclick="">X</a></div>
            </div>
        </div>
    </body>
</html>