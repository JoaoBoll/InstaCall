<!DOCTYPE HTML>
<html>
    <head>
        
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <meta charset="utf-8">
        <script type="text/javascript" src="../JS/mask.js"></script>
        <script type="text/javascript" src="../JS/cadastrar.js"></script>
        <script type="text/javascript" src="../JS/cep.js"></script>
        <link rel="stylesheet" href="cadastrarInstituicao.css"></link>

        <title>Cadastrar Instituição- InstaCall</title>

    </script>
    </head>
    <header>
        <div id="topoInstaCall">
            <h1 class="insta"><font >Insta</font><font class="call">Call&copy;</font></h1>
        </div>
    </header>
    <body>
        <div class="centralizarTudo">
            <h2>
                Cadastrar Instituição
            </h2>
            <div>
                <table class="tabelaPrincipal">
                    <tr>
                        <td>ID: </td>
                        <td><input type="text" disabled></td>
                    </tr>
                    <tr>
                        <td>Instituição:</td>
                        <td><input type="text" maxlength="50" placeholder="Ex: SOCIESC" id="nomeInst" name="nomeInst"></td>
                    </tr>
                    <tr>
                        <td>CNPJ: </td>
                        <td><input type="text" maxlength="14" placeholder="Ex: 00.000.000/0000" id="cnpj" name="cnpj"></td>
                    </tr>
                    <tr>
                        <td><label for="">&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td>CEP: </td>
                        <td><input type="text" placeholder="Ex: 00000-000" id="cep" name="cep"></td>
                        <td><input type="button" onclick="buscaCep()" class="botao" value="Buscar"></td>
                    </tr>
                    <tr>
                        <td>UF: </td>
                        <td><input type="text" id="uf" name="uf" disabled></td>
                    </tr>
                    <tr>
                        <td>Cidade: </td>
                        <td><input type="text" id="cidade" name="cidade" disabled></td>
                        <td>Bairro: </td>
                        <td><input type="text" id="bairro" name="bairro" disabled></td>
                    </tr>
                    <tr>
                        <td>Logradouro: </td>
                        <td><input type="text" id="logradouro" name="logradouro" disabled></td>
                        <td>N°: </td>
                        <td><input type="text" placeholder="Ex: 12345" id="numInst" name="numInst"></td>
                    </tr> 
                </table>
                <input type="button" class="botao" onclick="cadastrarInstituicao()" value="Salvar"></input>
              <a href="../menuADM.php" class="mudarPagina"> <input type="button" class="botao" value="Voltar"></a>
            </div>
        </div>
    </body>
</html>