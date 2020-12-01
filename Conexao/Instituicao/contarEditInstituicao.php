<?php

  require_once "../conexao.php";
  
  $sql = ("SELECT COUNT(*) AS total FROM instituicao WHERE cnpjInst = :cnpj AND idInst != :idInst");

  $query = $conn->prepare($sql);

  $query->bindParam(':idInst',$_POST['idInst']);
  $query->bindParam(':cnpj',$_POST['cnpj']);

  $query->execute();

  $result = $query->fetchObject();
  
  echo json_encode($result);
