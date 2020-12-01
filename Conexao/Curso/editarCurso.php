<?php

require_once "../conexao.php";

try{
  $sql = ("UPDATE curso SET idInst = :idInst, nomeCurso = :curso, nivelCurso = :nivel WHERE idCurso = :idCurso");

  $query = $conn->prepare($sql);

  $query->bindParam(':idInst',$_POST['idInst']);  
  $query->bindParam(':curso',$_POST['curso']);
  $query->bindParam(':nivel',$_POST['nivel']);
  $query->bindParam(':idCurso',$_POST['idCurso']);
 
  $query->execute();

  echo json_encode(['status'=>true]);

} catch (PDOException $e) {
  echo ("Erro " .$e->getMessage());
  echo json_encode(['status'=>false]);
}