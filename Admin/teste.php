<html>
    <head>
        <link rel="stylesheet" href="admin.css">
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script type="text/javascript" src="cadastrar.js"></script>
        <script type="text/javascript" src="mask.js"></script>
        <script src="editar.js"></script>
    </head>
    <body>
        <div id="editarInstModal" class="editarInstModal">
            <div class="editarInstModalBox">
                <div class="fundoTabelaEditarModal">
                    <span class="topoTabelaEditarInst">Pesquisar Nome: <input type="text" name="pesquisarInst" id="pesquisarInst"></span>
                        <table class="tabelaEditarInstModal">
                            <tr>
                                <th class="tableId">ID</th>
                                <th class="tableNome">Nome</th>
                                <th class="tableLogradouro">Logradoura</th>
                                <th class="tableNum">N°</th>
                                <th class="tableBairro">Bairro</th>
                                <th class="tableCidade">Cidade</th>
                                <th class="tableEstado">Estado</th>
                                <th class="tableCEP">CEP</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                </div>
                <div id="fechar"><a onclick="">X</a></div>
            </div>
        </div>
    </body>
</html>