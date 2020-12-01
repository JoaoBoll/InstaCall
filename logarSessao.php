<?php
    session_start(); //se ainda não começou a session.
    $_SESSION['loginGlobal'] = $_POST['loginMenu'];
    $_SESSION['senhaGlobal'] = $_POST['senhaMenu'];
    $_SESSION['tipo'] = $_POST['tipo'];
?>