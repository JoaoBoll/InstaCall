<?php

require_once "../conexao.php";

try{
    
  $sql = ("UPDATE atividade SET nomeAtividade = :nome, descricaoAtividade = :descAtividade, dataLimite = :dataAtividade, teste = :teste  WHERE idAtividade = :idAtividade");

  $query = $conn->prepare($sql);
  
  
  $query->bindParam(':nome',$_POST['nome']);
  $query->bindParam(':descAtividade',$_POST['desc']);
  $query->bindParam(':dataAtividade',$_POST['data']);
  $query->bindParam(':teste',$_POST['status']);
  $query->bindParam(':idAtividade',$_POST['idAtividade']);

  $query->execute();

  echo json_encode(['status' =>true]);

} catch (PDOException $e) {
  echo ("Erro " .$e->getMessage());
  echo json_encode(['status'=>false]);
}