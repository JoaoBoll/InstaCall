<?php
require_once "../conexao.php";

try {
  $sql = ("INSERT INTO notas (idTurma, idAtividade, idAluno, nota) VALUES (:turma, :idAtividade, :idAluno, :nota)");

  $query = $conn->prepare($sql);

  $query->bindParam(':turma',$_POST['turma']);
  $query->bindParam(':idAtividade',$_POST['idAtividade']);
  $query->bindParam(':idAluno',$_POST['idAluno']);
  $query->bindParam(':nota',$_POST['nota']);

  $query->execute();

  echo json_encode(['status'=>true]);
} catch (PDOException $e){
  echo ("Erro " . $e->getMessage());
  echo json_encode(['status'=>false]);
}
  