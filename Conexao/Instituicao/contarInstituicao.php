<?php

  require_once "../conexao.php";
  
  $sql = ("SELECT COUNT(*) AS total FROM instituicao WHERE cnpjInst = :cnpj");

  $query = $conn->prepare($sql);

  $query->bindParam(':cnpj',$_POST['cnpj']);

  $query->execute();

  $result = $query->fetchObject();
  
  echo json_encode($result);
