<?php
require_once "../conexao.php";

    $sql = ("SELECT * FROM instituicao");
    $query = $conn->prepare($sql);
    $query->execute();

    $result = $query->fetchAll();
  
    echo json_encode($result);