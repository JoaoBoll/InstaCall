<?php
require_once "../conexao.php";

    $sql = ("SELECT * FROM instituicao WHERE nomeInst LIKE :nome");
    $query = $conn->prepare($sql);

    $query->bindParam(':nome',$_POST['nomeInst']);

    $query->execute();

    $result = $query->fetchAll();
  
    echo json_encode($result);