<?php

  require_once "../conexao.php";
  
  $sql = ("SELECT instituicao.nomeInst, instituicao.cnpjInst, instituicao.cepInst, instituicao.ufInst, instituicao.cidadeInst, instituicao.bairroInst, instituicao.logradouroInst, instituicao.numInst FROM instituicao WHERE instituicao.idInst = :idInst");
  
  $query = $conn->prepare($sql);

  $query->bindParam(':idInst',$_POST['idInst']);

  $query->execute();

  $result = $query->fetchObject();
  
  echo json_encode($result);