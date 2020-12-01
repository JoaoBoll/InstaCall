<?php
require_once "../conexao.php";

    $sql = ("SELECT * FROM professor");
    $query = $conn->prepare($sql);
    $query->execute();

    $result = $query->fetchAll();
  
    echo json_encode($result);