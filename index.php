<html>
   <head>
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

        <meta charset="UTF-8">
        <link href="styleLogin.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="Admin/JS/login.js"></script>

       <title>InstaCall - Unisociesc</title>

   </head>
    <body id="fundo">
        <h1><font class="instaCall">Insta</font><font class="instaCall2">Call&copy;</font></h1>     
        <div class="contagem">
            <span>Logins Aluno: <?php require 'QuantidadeAcesso/dao/getacesso.php'; echo getAcessosAluno(); ?></span><label for=""></label>
            <br>
            <span>Logins Professor: <?php echo getAcessosProfessor(); ?></span><label for=""></label>
        </div>
        <div id="login" class="fora">
            <div class="borda1">
                <div class="borda2">
                    <center><div><img class="logoSociesc" src="Imagens/logo.png"></div>
                    <div class="informacaoLogin">
                        <br>
                        Horários | Chamadas
                        <br>
                        Frequência | Notas
                        <br>
                        Atividades | Material Complementar
                    </div>    
                    <br>
                    <br>
                    <br>
                    <div class="inputs">
                        <form method="POST"></form>
                            <label for="">Login: </label><input id="loginMenu" class="inputsLogin" placeholder="Login">
                            <br>
                            <br>
                            <label for="">Senha: </label><input id="senhaMenu" class="inputsLogin" type="password" placeholder="Senha">
                            <br>
                            <br>
                            <input type="button" onclick="loginADM()" id="button" value="Entrar">
                    </div></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>