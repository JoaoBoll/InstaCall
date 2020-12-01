<?php
require_once "../conexao.php";

try {
  $sql = ("INSERT INTO curso (idInst, nomeCurso, nivelCurso) VALUES (:idInst, :curso, :nivel)");

  $query = $conn->prepare($sql);

  $query->bindParam(':idInst',$_POST['idInst']);
  $query->bindParam(':curso',$_POST['curso']);
  $query->bindParam(':nivel',$_POST['nivel']);

  $query->execute();

  echo json_encode(['status'=>true]);
} catch (PDOException $e){
  echo ("Erro " . $e->getMessage());
  echo json_encode(['status'=>false]);
}
  