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
        <link rel="stylesheet" href="editarAluno.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar Aluno- InstaCall</title>
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div> 
        
    </header>
    <body>
        <div class="centralizarTudo">
            <h1>
                Editar Matrícula - Aluno
            </h1>
            <div>
                <table class="tabelaPrincipal">
                    <tr>
                        <td id="direita">Matrícula: </td>
                        <td><input type="text" placeholder="Ex: 000000000" id="matricula" name="matricula"></td>
                        <td><input type="button" class="botao2" value="Buscar" onclick="buscarIdAluno()"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" id="abrirModalAluno" class="botao" style="width: 100%;" value="Listar Alunos"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">Nome: </td>
                        <td><input type="text" maxlength="50" placeholder="Ex: Joao" id="nome" name="nome"></td>
                    </tr>
                    <tr>
                        <td id="direita">CPF: </td>
                        <td><input type="text" placeholder="Ex: 000.000.000-00" id="cpf" name="cpf"></td>
                        <td id="direita">Nascimento: </td>
                        <td><input type="text" placeholder="00/00/0000" id="nascimento" name="nascimento"></td>
                    </tr>
                    <tr>
                        <td id="direita">Telefone: </td>
                        <td><input type="text" placeholder="Ex: (00) 0000-0000" id="telefone"></td>
                        <td id="direita">Celular: </td>
                        <td><input type="text" placeholder="Ex: (00) 0 0000-0000" id="celular"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">CEP: </td>
                        <td><input type="text" placeholder="Ex: 00000-00" id="cep" name="cep"></td>
                        <td align="left"><input type="button" class="botao2" onclick="buscaCep()" value="Buscar"></input></td>
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
                        <td id="direita">Número: </td>
                        <td><input type="text" placeholder="Ex: 1234" id="numero" name="numero"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">Id Turma:</td>
                        <td><input type="text" placeholder="Ex:1234" id="idTurma" name="idTurma"></td>
                        <td align="left"><input type="button" onclick="buscarIdTurma2()" class="botao2" value="Buscar"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input style="width: 100%;" class="abrirModalTurma botao2" type="button" value="Listar Turmas"></td>
                    </tr>
                    <tr>
                        <td id="direita">Cuso: </td>
                        <td><input type="text" disabled id="curso"></td>
                    </tr>
                    <tr>
                        <td id="direita">Turno:</td>
                        <td><input type="text" disabled id="turno" name="turno"></td>
                    </tr>
                    <tr>
                        <td id="direita">Nível: </td>
                        <td align="left">
                            <input type="text" disabled name="nivel" id="nivel">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td id="direita">Login: </td>
                        <td><input type="text" placeholder="Ex: aluno@estudante.com" id="login" name="login"></td>
                        <td id="direita">Senha: </td>
                        <td><input type="text" placeholder="Ex: 123456789" id="senha" name="senha"></td>
                    </tr>
                </table>
            </div>
            <div>
                <input type="button" class="botao2"  onclick="editarAluno()" value="Salvar">
                <a href="../menuADM.php" class="mudarPagina"><input type="button" class="botao2" value="Voltar"></a>
            </div>
        </div>
        <div id="listarAlunoModal" class="modalAluno">
            <div class="listarAlunoModalBox">
                <div class="fundoBrancoAluno">
                    <span class="pesquisaLabel">Pesquisar CPF: <input type="text" onkeyup="pesquisarAluno()" id="pesquisarAluno" class="cpf pesquisarAluno" name="pesquisarAluno"></span><input type="button" value="Limpar Filtro" style="width: 100px;" class="botao" onclick="limparFiltroAluno()">
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
                <div class="fecharAluno"><a onclick="">X</a></div>
            </div>
        </div>
        <div id="listarTurmaModal" class="modalTurma">
            <div class="listarTurmaModalBox">
                <div class="fundoBrancoTurma">
                    <span class="pesquisaLabel">Pesquisar Nome: <input type="text" onkeyup="pesquisarTurma()" id="pesquisarTurma" class="pesquisarCurso" name="pesquisarTurma"></span><input type="button" value="Limpar Filtro" style="width: 100px;" class="botao" onclick="limparFiltroTurma()">
                    <br>
                    <br>
                    <div class="overflow">
                        <center>
                            <table BORDER RULES = ALL class="tableListarTurma" id="tableListarTurma" style="width: 100%;">
                                <tr>
                                    <th class="tableModal1">Matrícula</th>
                                    <th class="tableModal2">Curso</th>
                                    <th class="tableModal3">Nivel</th>
                                    <th class="tableModal3">Turno</th>
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
                <div class="fecharTurma"><a onclick="">X</a></div>
            </div>
        </div>
    </body>
</html>