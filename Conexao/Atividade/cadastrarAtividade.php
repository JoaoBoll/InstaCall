<?php
require_once "../conexao.php";

try {
  $sql = ("INSERT INTO atividade (idTurma, idProf, nomeAtividade, descricaoAtividade, dataLimite, teste) VALUES (:turma, :idProf, :nome, :descAtiv, :dataFinal, 1)");

  $query = $conn->prepare($sql);

  $query->bindParam(':turma',$_POST['turma']);
  $query->bindParam(':idProf',$_POST['idProf']);
  $query->bindParam(':nome',$_POST['nome']);
  $query->bindParam(':descAtiv',$_POST['desc']);
  $query->bindParam(':dataFinal',$_POST['data']);

  $query->execute();

  echo json_encode(['status'=>true]);
} catch (PDOException $e){
  echo ("Erro " . $e->getMessage());
  echo json_encode(['status'=>false]);
}
  